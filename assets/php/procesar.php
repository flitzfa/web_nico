<?php
if(isset($_POST['submit'])){
    $to = "fabrix.enriquez@gmail.com"; //aquí debes especificar la dirección de correo electrónico a la que quieres que se envíe el formulario
    $subject = "Nuevo mensaje de formulario de contacto";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: " . $email . "\r\n" .
    "Reply-To: " . $email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);
    echo "¡Tu mensaje ha sido enviado!";
}
?>