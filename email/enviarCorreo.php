<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $email = $_POST['email'];
    $nombre = $_POST['name'];
    $mensaje = $_POST['mensaje'];
}

$mail = new PHPMailer(true);

try{
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
    $mail->setFrom('GomezyAsociados@GomezyAsociados.com', 'GomezyAsociados@GomezyAsociados.com');
    //destinos
    $mail->addAddress('wdsp9898@gmail.com');
    $mail->addAddress('ceo@dexcondigital.com');
    $mail->addAddress('gestion@dexcondigital.com');

    $mail->Subject='Mensaje desde la pagina web de Inmobiliaria Gomes y Asociados sección Contactos';
    $mail->Body = '<span>Hola, '.$nombre.' quiere ser contactado por ustedes. </span>
                    <h4>Sus datos son:</h4>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias.');
        window.location.href='.././contactanos.php'
         </script>";
  

}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
?>