<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $asunto = $_POST['asunto'];
    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
}
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    //acceso
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Mensaje para enviar

    $mail->isHTML(true);
    //Cabecera
    $mail->setFrom('Creacion@Creacioninmobiliaria.com', 'Creacion@Creacioninmobiliaria.com');
    //destinos
    // $mail->addAddress(' info@creacioninmobiliaria.com');
    

    $mail->Subject = 'Mensaje desde la página web Creación Inmobiliaria sección contáctenos';
    $mail->Body = '<span>Hola, ' . $nombre . ' quiere realizar una solicitud de <strong>' . $asunto . '</strong>. </span>
                    <h4>Sus datos de contacto son:</h4>
                    <ul>
                        <li>Correo: ' . $email . '</li>
                        <li>Telefono: ' . $telefono . '</li>
                        <li>Mensaje: ' . $mensaje . '</li>
                    </ul>
    ';
    $mail->send();
    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias.');
        window.location.href='.././contacto.php'
         </script>";
} catch (Exception $e) {
    echo 'algo salio mal', $e->getMessage();
}
