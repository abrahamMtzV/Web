<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $empresa = $_POST['empresa'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    $destinatario = "avillela@gposalazarmapa.com";
    $asunto = "Nuevo mensaje de contacto";

    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Empresa: $empresa\n";
    $cuerpo .= "Teléfono: $telefono\n";
    $cuerpo .= "Correo: $correo\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";

    // Cabeceras para el correo
    $headers = "From: no-reply@tudominio.com\r\n";
    $headers .= "Reply-To: $correo\r\n";

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>