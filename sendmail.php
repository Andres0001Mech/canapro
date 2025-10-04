<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'bat/phpmailer/src/PHPMailer.php';
require 'bat/phpmailer/src/SMTP.php';
require 'bat/phpmailer/src/Exception.php';

$mail = new PHPMailer(true);

try {
    // Recibir datos del formulario
    $name = $_POST['name'] ?? 'Sin nombre';
    $email = $_POST['email'] ?? 'sin@correo.com';
    $phone = $_POST['phone'] ?? 'Sin teléfono';
    $message = $_POST['message'] ?? '';

    // Configuración SMTP
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'canapro-mail@canaprooc.com.co';
    $mail->Password = ''; #la contraseña esta en la cuenta del hostinger
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Ignorar verificación SSL (solo pruebas locales)
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]
    ];

    // Destinatarios
    $mail->setFrom('canapro-mail@canaprooc.com.co', 'Canapro');
    $mail->addAddress('sebdivantoque1441@gmail.com', 'Sebastián'); #cambiar 

    // Contenido del correo
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = "Estamos para ayudarte – Canapro C.A.C";
    $mail->Body = "
        <h1>Estamos para ayudarte – Canapro C.A.C.</h1>
        <p><strong>Nombre:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Teléfono:</strong> $phone</p>
        <p><strong>Mensaje:</strong><br>$message</p>
    ";

    $mail->send();
    echo "¡Correo enviado correctamente!\n";
} catch (Exception $e) {
    echo "Error SMTP: {$mail->ErrorInfo}\n";
}