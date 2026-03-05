<?php
/**
 * Configuración de Correos - Creatblue
 */

// Evitar acceso directo
if (!defined('ABSPATH')) {
    exit;
}

// 1. Agregar el menú en la administración
add_action('admin_menu', 'creatblue_contacto_settings_menu');
function creatblue_contacto_settings_menu()
{
    add_menu_page(
        'Contacto Creatblue',
        'Contacto Creatblue',
        'manage_options',
        'creatblue-contactos',
        'creatblue_contactos_page',
        'dashicons-email',
        25
    );
    add_submenu_page(
        'creatblue-contactos',
        'Registros de Contacto',
        'Registros',
        'manage_options',
        'creatblue-contactos',
        'creatblue_contactos_page'
    );
    add_submenu_page(
        'creatblue-contactos',
        'Ajustes de Contacto',
        'Ajustes',
        'manage_options',
        'creatblue-contacto-settings',
        'creatblue_contacto_settings_page'
    );
}

// 2. Registrar la configuración
add_action('admin_init', 'creatblue_contacto_settings_init');
function creatblue_contacto_settings_init()
{
    register_setting('creatblue_contacto_settings_group', 'creatblue_email_contacto');

    add_settings_section(
        'creatblue_contacto_main_section',
        'Configuración de Notificaciones',
        'creatblue_contacto_section_cb',
        'creatblue-contacto-settings'
    );

    add_settings_field(
        'creatblue_email_contacto',
        'Correos de Notificación',
        'creatblue_email_contacto_cb',
        'creatblue-contacto-settings',
        'creatblue_contacto_main_section'
    );
}

// 3. Funciones de Callback para el renderizado
function creatblue_contacto_section_cb()
{
    echo '<p>Configura las direcciones de correo electrónico que recibirán los mensajes del formulario de contacto.</p>';
}

function creatblue_email_contacto_cb()
{
    $email = get_option('creatblue_email_contacto');
    // Si no hay correo, usar el del admin por defecto temporalmente en el panel
    if (empty($email)) {
        $email = get_option('admin_email');
    }
    echo '<input type="text" name="creatblue_email_contacto" value="' . esc_attr($email) . '" class="regular-text">';
    echo '<p class="description">Puedes ingresar varios correos separados por comas (ejemplo: contacto@empresa.com, ventas@empresa.com)</p>';
}

// 4. Renderizar la página de opciones
function creatblue_contacto_settings_page()
{
    // Comprobar permisos
    if (!current_user_can('manage_options')) {
        return;
    }
?>
<div class="wrap">
    <h1>
        <?php echo esc_html(get_admin_page_title()); ?>
    </h1>
    <form action="options.php" method="post">
        <?php
    // Campos de seguridad
    settings_fields('creatblue_contacto_settings_group');
    // Secciones
    do_settings_sections('creatblue-contacto-settings');
    // Botón de guardar
    submit_button('Guardar Cambios');
?>
    </form>
</div>
<?php
}