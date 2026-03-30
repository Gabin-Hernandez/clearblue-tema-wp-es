<?php
if (!defined('ABSPATH')) {
    exit;
}

function cb_pdf_leads_is_legacy_plugin_active()
{
    return function_exists('plg_enqueue_assets') || function_exists('plg_save_lead_and_download');
}

function cb_pdf_leads_table_name()
{
    global $wpdb;
    return $wpdb->prefix . 'leads_pdf';
}

function cb_pdf_leads_create_table()
{
    global $wpdb;

    $table_name = cb_pdf_leads_table_name();
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE {$table_name} (
        id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        nombre VARCHAR(255) NOT NULL,
        telefono VARCHAR(20) NOT NULL,
        correo VARCHAR(255) NOT NULL,
        fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) {$charset_collate};";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}

function cb_pdf_leads_maybe_create_table()
{
    global $wpdb;

    $table_name = cb_pdf_leads_table_name();
    $exists = $wpdb->get_var($wpdb->prepare('SHOW TABLES LIKE %s', $table_name));

    if ($exists !== $table_name) {
        cb_pdf_leads_create_table();
    }
}
add_action('init', 'cb_pdf_leads_maybe_create_table', 5);
add_action('after_switch_theme', 'cb_pdf_leads_create_table');

function cb_pdf_leads_enqueue_assets()
{
    if (is_admin()) {
        return;
    }

    $css_rel = '/public/css/pdf-leads-gate.css';
    $js_rel = '/public/js/pdf-leads-gate.js';
    $css_path = get_stylesheet_directory() . $css_rel;
    $js_path = get_stylesheet_directory() . $js_rel;

    if (file_exists($css_path)) {
        wp_enqueue_style(
            'cb-pdf-leads-gate',
            get_stylesheet_directory_uri() . $css_rel,
            array(),
            (string) filemtime($css_path)
        );
    }

    if (file_exists($js_path)) {
        wp_enqueue_script(
            'cb-pdf-leads-gate',
            get_stylesheet_directory_uri() . $js_rel,
            array(),
            (string) filemtime($js_path),
            true
        );

        wp_localize_script('cb-pdf-leads-gate', 'PLG_PDF_LEADS', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('plg_pdf_leads_nonce'),
            'debug' => (defined('WP_DEBUG') && WP_DEBUG),
            'messages' => array(
                'required' => 'Este campo es obligatorio.',
                'phone' => 'El telefono debe contener exactamente 10 digitos numericos.',
                'email' => 'Ingresa un correo valido.',
                'submitError' => 'No se pudo guardar tu informacion. Intenta nuevamente.',
            ),
        ));
    }
}
if (!cb_pdf_leads_is_legacy_plugin_active()) {
    add_action('wp_enqueue_scripts', 'cb_pdf_leads_enqueue_assets');
}

function cb_pdf_leads_render_modal()
{
    if (is_admin()) {
        return;
    }
    ?>
    <div id="plg-pdf-modal" class="plg-pdf-modal" aria-hidden="true">
        <div class="plg-pdf-modal__overlay" data-close="true"></div>
        <div class="plg-pdf-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="plg-pdf-modal-title">
            <button type="button" class="plg-pdf-modal__close" id="plg-pdf-close" aria-label="Cerrar modal">&times;</button>

            <h3 id="plg-pdf-modal-title">Invierte en talento, asegura resultados</h3>
            <p class="plg-pdf-modal__subtitle">Completa tus datos y continúa con la descarga.</p>

            <form id="plg-pdf-form" novalidate>
                <div class="plg-pdf-field">
                    <label for="plg_nombre">Nombre</label>
                    <input type="text" id="plg_nombre" name="nombre" autocomplete="name" required>
                    <small class="plg-pdf-error" data-error-for="nombre"></small>
                </div>

                <div class="plg-pdf-field">
                    <label for="plg_telefono">Telefono</label>
                    <input type="tel" id="plg_telefono" name="telefono" inputmode="numeric" maxlength="10" autocomplete="tel" required>
                    <small class="plg-pdf-error" data-error-for="telefono"></small>
                </div>

                <div class="plg-pdf-field">
                    <label for="plg_correo">Email</label>
                    <input type="email" id="plg_correo" name="correo" autocomplete="email" required>
                    <small class="plg-pdf-error" data-error-for="correo"></small>
                </div>

                <input type="hidden" name="pdf_url" id="plg_pdf_url" value="">
                <button type="submit" id="plg-submit" class="plg-pdf-submit" disabled>Descargar PDF</button>
                <p id="plg-form-status" class="plg-form-status" role="status" aria-live="polite"></p>
            </form>
        </div>
    </div>
    <?php
}
if (!cb_pdf_leads_is_legacy_plugin_active()) {
    add_action('wp_footer', 'cb_pdf_leads_render_modal', 30);
}

function cb_pdf_leads_ajax_save()
{
    check_ajax_referer('plg_pdf_leads_nonce', 'nonce');

    global $wpdb;

    $nombre = isset($_POST['nombre']) ? sanitize_text_field(wp_unslash($_POST['nombre'])) : '';
    $telefono = isset($_POST['telefono']) ? sanitize_text_field(wp_unslash($_POST['telefono'])) : '';
    $correo = isset($_POST['correo']) ? sanitize_email(wp_unslash($_POST['correo'])) : '';
    $pdf_url = isset($_POST['pdf_url']) ? esc_url_raw(wp_unslash($_POST['pdf_url'])) : '';

    if ('' === $nombre || '' === $telefono || '' === $correo) {
        wp_send_json_error(array('message' => 'Todos los campos son obligatorios.'), 400);
    }

    if (!preg_match('/^\d{10}$/', $telefono)) {
        wp_send_json_error(array('message' => 'Telefono invalido.'), 400);
    }

    if (!is_email($correo)) {
        wp_send_json_error(array('message' => 'Correo invalido.'), 400);
    }

    if ('' === $pdf_url) {
        wp_send_json_error(array('message' => 'URL de PDF invalida.'), 400);
    }

    $lock_name = 'cb_pdf_' . md5(strtolower($nombre . '|' . $telefono . '|' . $correo));
    $lock_acquired = (int) $wpdb->get_var($wpdb->prepare('SELECT GET_LOCK(%s, 3)', $lock_name));

    if (1 !== $lock_acquired) {
        wp_send_json_success(array(
            'message' => 'Lead procesado anteriormente.',
            'pdf_url' => $pdf_url,
            'duplicate' => true,
        ));
    }

    // Evita duplicados por doble submit casi simultaneo.
    $duplicate_id = $wpdb->get_var(
        $wpdb->prepare(
            "SELECT id FROM " . cb_pdf_leads_table_name() . "
             WHERE nombre = %s AND telefono = %s AND correo = %s
             AND fecha >= (NOW() - INTERVAL 120 SECOND)
             ORDER BY id DESC
             LIMIT 1",
            $nombre,
            $telefono,
            $correo
        )
    );

    if (!empty($duplicate_id)) {
        $wpdb->get_var($wpdb->prepare('SELECT RELEASE_LOCK(%s)', $lock_name));
        wp_send_json_success(array(
            'message' => 'Lead procesado anteriormente.',
            'pdf_url' => $pdf_url,
            'duplicate' => true,
        ));
    }

    $inserted = $wpdb->insert(
        cb_pdf_leads_table_name(),
        array(
            'nombre' => $nombre,
            'telefono' => $telefono,
            'correo' => $correo,
        ),
        array('%s', '%s', '%s')
    );

    if (false === $inserted) {
        $wpdb->get_var($wpdb->prepare('SELECT RELEASE_LOCK(%s)', $lock_name));
        wp_send_json_error(array('message' => 'No fue posible guardar el lead.'), 500);
    }

    $wpdb->get_var($wpdb->prepare('SELECT RELEASE_LOCK(%s)', $lock_name));

    wp_send_json_success(array(
        'message' => 'Lead guardado correctamente.',
        'pdf_url' => $pdf_url,
    ));
}
if (!cb_pdf_leads_is_legacy_plugin_active()) {
    add_action('wp_ajax_plg_save_lead', 'cb_pdf_leads_ajax_save');
    add_action('wp_ajax_nopriv_plg_save_lead', 'cb_pdf_leads_ajax_save');
}

function cb_pdf_leads_admin_menu()
{
    add_menu_page(
        'Leads PDF',
        'Leads PDF',
        'manage_options',
        'cb-pdf-leads',
        'cb_pdf_leads_admin_page',
        'dashicons-media-document',
        26
    );
}
add_action('admin_menu', 'cb_pdf_leads_admin_menu');

function cb_pdf_leads_admin_page()
{
    if (!current_user_can('manage_options')) {
        return;
    }

    global $wpdb;

    $table_name = cb_pdf_leads_table_name();

    if ('POST' === $_SERVER['REQUEST_METHOD']) {
        $action = isset($_POST['cb_pdf_action']) ? sanitize_text_field(wp_unslash($_POST['cb_pdf_action'])) : '';
        $nonce = isset($_POST['cb_pdf_nonce']) ? sanitize_text_field(wp_unslash($_POST['cb_pdf_nonce'])) : '';

        if (!wp_verify_nonce($nonce, 'cb_pdf_admin_actions')) {
            wp_die('Nonce invalido.');
        }

        if ('delete_one' === $action) {
            $delete_id = isset($_POST['lead_id']) ? absint($_POST['lead_id']) : 0;
            if ($delete_id > 0) {
                $wpdb->delete($table_name, array('id' => $delete_id), array('%d'));
            }
            wp_safe_redirect(add_query_arg(array('page' => 'cb-pdf-leads', 'cb_msg' => 'deleted_one'), admin_url('admin.php')));
            exit;
        }

        if ('delete_all' === $action) {
            $wpdb->query("TRUNCATE TABLE {$table_name}");
            wp_safe_redirect(add_query_arg(array('page' => 'cb-pdf-leads', 'cb_msg' => 'deleted_all'), admin_url('admin.php')));
            exit;
        }
    }

    $per_page = 20;
    $paged = isset($_GET['paged']) ? max(1, absint($_GET['paged'])) : 1;
    $offset = ($paged - 1) * $per_page;

    $search = isset($_GET['s']) ? sanitize_text_field(wp_unslash($_GET['s'])) : '';
    $where_sql = '';
    $where_args = array();

    if ('' !== $search) {
        $like = '%' . $wpdb->esc_like($search) . '%';
        $where_sql = 'WHERE nombre LIKE %s OR telefono LIKE %s OR correo LIKE %s';
        $where_args = array($like, $like, $like);
    }

    $count_query = "SELECT COUNT(*) FROM {$table_name} {$where_sql}";
    $count_query = !empty($where_args) ? $wpdb->prepare($count_query, $where_args) : $count_query;
    $total_items = (int) $wpdb->get_var($count_query);

    $rows_query = "SELECT id, nombre, telefono, correo, fecha FROM {$table_name} {$where_sql} ORDER BY fecha DESC LIMIT %d OFFSET %d";
    $rows_args = array_merge($where_args, array($per_page, $offset));
    $rows = $wpdb->get_results($wpdb->prepare($rows_query, $rows_args), ARRAY_A);

    $total_pages = max(1, (int) ceil($total_items / $per_page));
    ?>
    <div class="wrap">
        <h1>Leads PDF</h1>

        <?php if (isset($_GET['cb_msg']) && 'deleted_one' === $_GET['cb_msg']) : ?>
            <div class="notice notice-success is-dismissible"><p>Lead eliminado correctamente.</p></div>
        <?php endif; ?>

        <?php if (isset($_GET['cb_msg']) && 'deleted_all' === $_GET['cb_msg']) : ?>
            <div class="notice notice-success is-dismissible"><p>Todos los leads fueron eliminados.</p></div>
        <?php endif; ?>

        <form method="get" style="margin-bottom: 16px;">
            <input type="hidden" name="page" value="cb-pdf-leads">
            <input type="search" name="s" value="<?php echo esc_attr($search); ?>" placeholder="Buscar por nombre, telefono o correo">
            <button type="submit" class="button">Buscar</button>
        </form>

        <form method="post" style="margin-bottom: 16px;">
            <input type="hidden" name="cb_pdf_action" value="delete_all">
            <input type="hidden" name="cb_pdf_nonce" value="<?php echo esc_attr(wp_create_nonce('cb_pdf_admin_actions')); ?>">
            <button type="submit" class="button button-secondary" onclick="return confirm('Se eliminaran todos los leads. ¿Continuar?');">
                Borrar Todos Los Leads
            </button>
        </form>

        <table class="widefat striped">
            <thead>
                <tr>
                    <th style="width: 80px;">ID</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th style="width: 180px;">Fecha</th>
                    <th style="width: 120px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($rows)) : ?>
                    <tr>
                        <td colspan="6">No hay registros.</td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($rows as $row) : ?>
                        <tr>
                            <td><?php echo (int) $row['id']; ?></td>
                            <td><?php echo esc_html($row['nombre']); ?></td>
                            <td><?php echo esc_html($row['telefono']); ?></td>
                            <td><?php echo esc_html($row['correo']); ?></td>
                            <td><?php echo esc_html($row['fecha']); ?></td>
                            <td>
                                <form method="post" style="margin:0;">
                                    <input type="hidden" name="cb_pdf_action" value="delete_one">
                                    <input type="hidden" name="lead_id" value="<?php echo (int) $row['id']; ?>">
                                    <input type="hidden" name="cb_pdf_nonce" value="<?php echo esc_attr(wp_create_nonce('cb_pdf_admin_actions')); ?>">
                                    <button type="submit" class="button button-small" onclick="return confirm('¿Eliminar este lead?');">
                                        Borrar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>

        <?php if ($total_pages > 1) : ?>
            <div class="tablenav" style="margin-top: 14px;">
                <div class="tablenav-pages">
                    <?php
                    echo wp_kses_post(paginate_links(array(
                        'base' => add_query_arg(
                            array(
                                'page' => 'cb-pdf-leads',
                                'paged' => '%#%',
                                's' => $search,
                            ),
                            admin_url('admin.php')
                        ),
                        'format' => '',
                        'current' => $paged,
                        'total' => $total_pages,
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;',
                    )));
                    ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?php
}
