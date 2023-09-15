<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Aquí puedes realizar las acciones deseadas con los datos del formulario

    // Por ejemplo, enviar un correo electrónico
    $destinatario = "tucorreo@example.com";
    $asunto = "Nuevo mensaje de contacto";
    $contenido = "Nombre: " . $nombre . "\n";
    $contenido .= "Email: " . $email . "\n";
    $contenido .= "Mensaje: " . $mensaje;
    mail($destinatario, $asunto, $contenido);

    // También puedes almacenar los datos en una base de datos

    // Luego, puedes redirigir al usuario a una página de confirmación o mostrar un mensaje de éxito
    echo "¡Gracias por contactarnos! Te responderemos pronto.";
}
?>
