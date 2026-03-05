<?php
// Evitar acceso directo
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function creatblue_contactos_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'creatblue_contacts';

    // Manejar borrado
    if ( isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id']) ) {
        // Verificar nonce
        if ( isset($_GET['_wpnonce']) && wp_verify_nonce($_GET['_wpnonce'], 'borrar_contacto_'.$_GET['id']) ) {
            $wpdb->delete( $table_name, array( 'id' => intval($_GET['id']) ) );
            echo '<div class="updated notice is-dismissible"><p>Registro borrado exitosamente.</p></div>';
        }
    }

    $resultados = $wpdb->get_results("SELECT * FROM $table_name ORDER BY fecha_registro DESC");

    ?>
    <div class="wrap">
        <h1>Registros de Contactos - Creatblue</h1>
        <p>Aquí puedes consultar todas las personas que se han puesto en contacto a través de la página.</p>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th style="width: 140px;">Fecha</th>
                    <th>Nombre y Apellido</th>
                    <th>Empresa</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Estado / C.P.</th>
                    <th>Solución</th>
                    <th>Detalles</th>
                    <th style="width: 80px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($resultados): ?>
                    <?php foreach ($resultados as $row): ?>
                        <tr>
                            <td><?php echo esc_html(wp_date(get_option('date_format') . ' ' . get_option('time_format'), strtotime($row->fecha_registro))); ?></td>
                            <td><?php echo esc_html($row->nombre . ' ' . $row->apellido); ?></td>
                            <td><?php echo esc_html($row->empresa); ?></td>
                            <td><a href="mailto:<?php echo esc_attr($row->correo); ?>"><?php echo esc_html($row->correo); ?></a></td>
                            <td><?php echo esc_html($row->telefono); ?></td>
                            <td><?php echo esc_html($row->estado . ' / ' . $row->codigo_postal); ?></td>
                            <td><?php echo esc_html($row->solucion); ?></td>
                            <td><div style="max-height: 100px; overflow-y: auto;"><?php echo nl2br(esc_html($row->detalles)); ?></div></td>
                            <td>
                                <?php
                                $delete_nonce = wp_create_nonce( 'borrar_contacto_' . $row->id );
                                $delete_url = admin_url( 'admin.php?page=creatblue-contactos&action=delete&id=' . $row->id . '&_wpnonce=' . $delete_nonce );
                                ?>
                                <a href="<?php echo esc_url($delete_url); ?>" onclick="return confirm('¿Estás seguro de que deseas borrar este registro de contacto de forma permanente?');" style="color:red; font-weight:bold;">Borrar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9">Aún no hay mensajes de contacto registrados en el sistema.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}
