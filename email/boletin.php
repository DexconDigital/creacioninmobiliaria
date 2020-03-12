<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $email = $_POST['email'];
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
    $mail->setFrom('Creacion@Creacioninmobiliaria.com', 'Creacion@Creacioninmobiliaria.com');
    //destinos
    // $mail->addAddress(' info@creacioninmobiliaria.com');
    $mail->addAddress('wdsp9898@gmail.com');
    

    $mail->Subject='Mensaje desde la pagina web Creación Inmobiliaria';
    $mail->Body = '<span>El correo '.$email.' se inscribió a el boletín de información de la pagina web Creación Inmobiliaria.</span>
                    ';
    $mail->send();
    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias.');
        window.location.href='.././index.php'
         </script>";
  

}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
?>