<?php
/**
 * Manejador del Formulario de Contacto
 */

// Evitar acceso directo
if (!defined('ABSPATH')) {
    exit;
}

// Hook para usuarios logueados
add_action('wp_ajax_procesar_contacto', 'creatblue_procesar_contacto');
// Hook para usuarios no logueados (visitantes)
add_action('wp_ajax_nopriv_procesar_contacto', 'creatblue_procesar_contacto');

function creatblue_procesar_contacto()
{
    // 1. Verificar el Nonce de seguridad
    if (!isset($_POST['contacto_nonce']) || !wp_verify_nonce($_POST['contacto_nonce'], 'enviar_contacto')) {
        wp_send_json_error(array('mensaje' => 'Error de seguridad. Por favor, recargue la página e intente nuevamente.'));
    }

    // 2. Recoger y sanitizar los datos
    $nombre = sanitize_text_field($_POST['nombre'] ?? '');
    $apellido = sanitize_text_field($_POST['apellido'] ?? '');
    $correo = sanitize_email($_POST['correo'] ?? '');
    $empresa = sanitize_text_field($_POST['empresa'] ?? '');
    $estado = sanitize_text_field($_POST['estado'] ?? '');
    $codigo_postal = sanitize_text_field($_POST['codigo-postal'] ?? '');
    $telefono = sanitize_text_field($_POST['telefono'] ?? '');
    $solucion = sanitize_text_field($_POST['solucion'] ?? '');
    $detalles = sanitize_textarea_field($_POST['detalles'] ?? '');

    // Checkboxes (boolean)
    $consentimiento = isset($_POST['consentimiento']) ? 'Sí' : 'No';
    $marketing = isset($_POST['marketing']) ? 'Sí' : 'No';

    // 3. Validar campos requeridos mínimos
    if (empty($nombre) || empty($apellido) || empty($correo)) {
        wp_send_json_error(array('mensaje' => 'Por favor compense al menos Nombre, Apellido y Correo.'));
    }

    if (!is_email($correo)) {
        wp_send_json_error(array('mensaje' => 'El correo electrónico no es válido.'));
    }

    if ($consentimiento === 'No') {
        wp_send_json_error(array('mensaje' => 'Debes aceptar las políticas y aviso de privacidad para continuar.'));
    }

    // Insertar en la Base de Datos
    global $wpdb;
    $table_name = $wpdb->prefix . 'creatblue_contacts';

    $insertado = $wpdb->insert(
        $table_name,
        array(
        'fecha_registro' => current_time('mysql'),
        'nombre' => $nombre,
        'apellido' => $apellido,
        'correo' => $correo,
        'empresa' => $empresa,
        'estado' => $estado,
        'codigo_postal' => $codigo_postal,
        'telefono' => $telefono,
        'solucion' => $solucion,
        'detalles' => $detalles,
        'consentimiento' => $consentimiento,
        'marketing' => $marketing
    )
    );

    // 4. Preparar el correo
    $destinatarios_opcion = get_option('creatblue_email_contacto');
    if (empty($destinatarios_opcion)) {
        $to_array = array(get_option('admin_email'));
    }
    else {
        // En caso de que haya varios correos separados por coma, separar en un array y limpiar espacios
        $to_array = array_map('trim', explode(',', $destinatarios_opcion));
    }

    $subject = 'Nuevo mensaje de contacto desde Creatblue México: ' . $empresa;

    // Construir el cuerpo del correo en HTML
    $body = '<h2>Nuevo mensaje de contacto</h2>';
    $body .= '<p><strong>Nombre:</strong> ' . $nombre . ' ' . $apellido . '</p>';
    $body .= '<p><strong>Correo Electrónico:</strong> ' . $correo . '</p>';
    $body .= '<p><strong>Empresa:</strong> ' . $empresa . '</p>';
    $body .= '<p><strong>Teléfono:</strong> ' . $telefono . '</p>';
    $body .= '<p><strong>Estado:</strong> ' . $estado . '</p>';
    $body .= '<p><strong>Código Postal:</strong> ' . $codigo_postal . '</p>';
    $body .= '<p><strong>Solución de interés:</strong> ' . $solucion . '</p>';
    $body .= '<p><strong>Detalles:</strong><br/>' . nl2br($detalles) . '</p>';
    $body .= '<hr>';
    $body .= '<p><strong>Consentimiento de Políticas:</strong> ' . $consentimiento . '</p>';
    $body .= '<p><strong>Suscripción a Marketing:</strong> ' . $marketing . '</p>';

    // 5. Enviar el correo usando Resend API
    $api_key = 're_7XJ2un3S_547Kjap8vUEEwvnY2ce1HSvn';
    $resend_url = 'https://api.resend.com/emails';

    $resend_body = array(
        'from' => 'Creatblue <noreply@email.jhernandez.mx>',
        'to' => $to_array,
        'subject' => $subject,
        'html' => $body,
        'reply_to' => $correo
    );

    $args = array(
        'body' => wp_json_encode($resend_body),
        'timeout' => '15',
        'httpversion' => '1.0',
        'blocking' => true,
        'headers' => array(
            'Authorization' => 'Bearer ' . $api_key,
            'Content-Type' => 'application/json',
        )
    );

    $reponse = wp_remote_post($resend_url, $args);
    $enviado_resend = false;

    if (!is_wp_error($reponse)) {
        $response_code = wp_remote_retrieve_response_code($reponse);
        if ($response_code >= 200 && $response_code < 300) {
            $enviado_resend = true;
        }
    }

    if ($enviado_resend && $insertado) {
        wp_send_json_success(array('mensaje' => '¡Gracias! Tu mensaje ha sido enviado correctamente y guardado. Nos pondremos en contacto contigo pronto.'));
    }
    elseif ($insertado) {
        wp_send_json_success(array('mensaje' => 'Tu mensaje fue guardado pero tuvimos un pequeño problema al notificar por correo. Nos comunicaremos contigo.'));
    }
    else {
        wp_send_json_error(array('mensaje' => 'Hubo un problema al procesar tu formulario. Por favor intenta más tarde o contáctanos por WhatsApp.'));
    }
}