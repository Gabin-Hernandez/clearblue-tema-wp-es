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

    // 4. Preparar el correo
    $destinatarios_opcion = get_option('creatblue_email_contacto');
    if (empty($destinatarios_opcion)) {
        $to = get_option('admin_email');
    }
    else {
        $to = $destinatarios_opcion;
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

    $headers = array('Content-Type: text/html; charset=UTF-8');
    $headers[] = 'Reply-To: ' . $nombre . ' <' . $correo . '>';

    // 5. Enviar el correo
    $enviado = wp_mail($to, $subject, $body, $headers);

    if ($enviado) {
        wp_send_json_success(array('mensaje' => '¡Gracias! Tu mensaje ha sido enviado correctamente. Nos pondremos en contacto contigo pronto.'));
    }
    else {
        wp_send_json_error(array('mensaje' => 'Hubo un problema al enviar tu mensaje. Por favor intenta más tarde o contáctanos por WhatsApp.'));
    }
}