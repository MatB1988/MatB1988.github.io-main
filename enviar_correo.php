<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar los datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Configurar el destinatario y el asunto del correo electrónico
    $to = "bassomatias88@gmail.com"; // Direccion de correo 
    $subject = "Nuevo mensaje de contacto de $name";

    // Construir el cuerpo del correo electrónico
    $body = "Nombre: $name\n";
    $body .= "Correo electrónico: $email\n\n";
    $body .= "Mensaje:\n$message";

    // Enviar el correo electrónico
    if (mail($to, $subject, $body)) {
        echo "<p>¡Gracias por tu mensaje! Te responderemos pronto.</p>";
    } else {
        echo "<p>Hubo un problema al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.</p>";
    }
}
?>
