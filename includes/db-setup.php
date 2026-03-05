<?php
// Evitar acceso directo
if (!defined('ABSPATH')) {
    exit;
}

function creatblue_create_db_tables()
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'creatblue_contacts';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        fecha_registro datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
        nombre varchar(100) NOT NULL,
        apellido varchar(100) NOT NULL,
        correo varchar(100) NOT NULL,
        empresa varchar(150) NOT NULL,
        estado varchar(100) NOT NULL,
        codigo_postal varchar(20) NOT NULL,
        telefono varchar(20) NOT NULL,
        solucion varchar(255) NOT NULL,
        detalles text NOT NULL,
        consentimiento varchar(10) NOT NULL,
        marketing varchar(10) NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    update_option('creatblue_db_version', '1.0');
}

add_action('after_switch_theme', 'creatblue_create_db_tables');

// Asegurar que la tabla exista ejecutándola si no está la opción de versión configurada
add_action('admin_init', 'creatblue_check_db_tables');
function creatblue_check_db_tables()
{
    if (get_option('creatblue_db_version') != '1.0') {
        creatblue_create_db_tables();
    }
}