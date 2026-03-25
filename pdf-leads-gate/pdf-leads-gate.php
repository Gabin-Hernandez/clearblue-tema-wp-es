<?php
/**
 * Plugin Name: PDF Leads Gate
 * Description: Intercepta clics en botones .btn-descargar-pdf, captura leads y permite descargar PDF despues de guardar.
 * Version: 1.0.0
 * Author: ClearBlue
 */

if (!defined('ABSPATH')) {
    exit;
}

function plg_get_base_url()
{
    $plugin_dir = wp_normalize_path(WP_PLUGIN_DIR);
    $file_dir = wp_normalize_path(dirname(__FILE__));

    // Si el archivo vive dentro de wp-content/plugins, usar URL de plugin.
    if (strpos($file_dir, $plugin_dir) === 0) {
        return plugin_dir_url(__FILE__);
    }

    // Fallback: cargado desde el tema.
    return trailingslashit(get_stylesheet_directory_uri()) . 'pdf-leads-gate/';
}

function plg_create_leads_table()
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'leads_pdf';
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
register_activation_hook(__FILE__, 'plg_create_leads_table');

function plg_maybe_create_leads_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'leads_pdf';

    $table_exists = $wpdb->get_var($wpdb->prepare('SHOW TABLES LIKE %s', $table_name));
    if ($table_exists !== $table_name) {
        plg_create_leads_table();
    }
}
add_action('init', 'plg_maybe_create_leads_table');

function plg_enqueue_assets()
{
    if (is_admin()) {
        return;
    }

    $base_url = plg_get_base_url();

    wp_enqueue_style(
        'plg-pdf-leads-gate',
        $base_url . 'assets/css/pdf-leads-gate.css',
        array(),
        '1.0.0'
    );

    wp_enqueue_script(
        'plg-pdf-leads-gate',
        $base_url . 'assets/js/pdf-leads-gate.js',
        array(),
        '1.0.0',
        true
    );

    wp_localize_script('plg-pdf-leads-gate', 'PLG_PDF_LEADS', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('plg_pdf_leads_nonce'),
        'messages' => array(
            'required' => 'Este campo es obligatorio.',
            'phone' => 'El telefono debe contener exactamente 10 digitos numericos.',
            'email' => 'Ingresa un correo valido.',
            'submitError' => 'No se pudo guardar tu informacion. Intenta nuevamente.'
        ),
    ));
}
add_action('wp_enqueue_scripts', 'plg_enqueue_assets');

function plg_render_modal()
{
    if (is_admin()) {
        return;
    }
    ?>
    <div id="plg-pdf-modal" class="plg-pdf-modal" aria-hidden="true">
        <div class="plg-pdf-modal__overlay" data-close="true"></div>

        <div class="plg-pdf-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="plg-pdf-modal-title">
            <button type="button" class="plg-pdf-modal__close" id="plg-pdf-close" aria-label="Cerrar modal">&times;</button>

            <h3 id="plg-pdf-modal-title">Descargar PDF</h3>
            <p class="plg-pdf-modal__subtitle">Completa tus datos para continuar con la descarga.</p>

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
add_action('wp_footer', 'plg_render_modal');

function plg_save_lead_and_download()
{
    check_ajax_referer('plg_pdf_leads_nonce', 'nonce');

    global $wpdb;
    $table_name = $wpdb->prefix . 'leads_pdf';

    $nombre = isset($_POST['nombre']) ? sanitize_text_field(wp_unslash($_POST['nombre'])) : '';
    $telefono = isset($_POST['telefono']) ? sanitize_text_field(wp_unslash($_POST['telefono'])) : '';
    $correo = isset($_POST['correo']) ? sanitize_email(wp_unslash($_POST['correo'])) : '';
    $pdf_url = isset($_POST['pdf_url']) ? esc_url_raw(wp_unslash($_POST['pdf_url'])) : '';

    if (empty($nombre) || empty($telefono) || empty($correo)) {
        wp_send_json_error(array('message' => 'Todos los campos son obligatorios.'), 400);
    }

    if (!preg_match('/^\d{10}$/', $telefono)) {
        wp_send_json_error(array('message' => 'Telefono invalido.'), 400);
    }

    if (!is_email($correo)) {
        wp_send_json_error(array('message' => 'Correo invalido.'), 400);
    }

    if (empty($pdf_url)) {
        wp_send_json_error(array('message' => 'URL del PDF invalida.'), 400);
    }

    $inserted = $wpdb->insert(
        $table_name,
        array(
            'nombre' => $nombre,
            'telefono' => $telefono,
            'correo' => $correo,
        ),
        array('%s', '%s', '%s')
    );

    if (false === $inserted) {
        wp_send_json_error(array('message' => 'No fue posible guardar el lead.'), 500);
    }

    wp_send_json_success(array(
        'message' => 'Lead guardado correctamente.',
        'pdf_url' => $pdf_url,
    ));
}
add_action('wp_ajax_plg_save_lead', 'plg_save_lead_and_download');
add_action('wp_ajax_nopriv_plg_save_lead', 'plg_save_lead_and_download');
