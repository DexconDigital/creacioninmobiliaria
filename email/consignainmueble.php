<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono']; 
    $direccion = $_POST['direccion'];
    $inmueble = $_POST['tipo_inm'];
    $sector = $_POST['sector'];
    $transaccion = $_POST['transaccion'];
    $area = $_POST['area'];
    $mensaje = $_POST['mensaje'];

  /*   ;
    
    $ciudad = $_POST['ciudad'];
    
    
    $valor = $_POST['valor']; */
    
    
    
}

$mail = new PHPMailer(true);

try{
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->CharSet = 'UTF-8';
    $mail->Username = 'masivoinmobiliarias@gmail.com';
    $mail->Password = 'dexcon2019@';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    // Mensaje para enviar
    
    $mail->isHTML(true);
    $mail->setFrom('Creacion@Creacioninmobiliaria.com', 'Creacion@Creacioninmobiliaria.com');
    /* $mail->addAddress('wdsp9898@gmail.com');
    $mail->addAddress('ceo@dexcondigital.com');
    $mail->addAddress('gestion@dexcondigital.com'); */

    $mail->Subject='Mensaje desde la pagina web de Inmobiliaria Creación inmobiliaria.';
    $mail->Body = '<span>Hola, '.$nombre.' quiere recibir información sobre como consignar un inmueble.</span>
                    <h4>Sus datos de contacto son:</h4>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Telefono: '.$telefono.'</li>
                        <li>Dirección: '.$direccion.'</li>
                        <li>Quiere consignar su inmueble en: '.$transaccion.'</li>
                        <li>Tipo de inmueble: '.$inmueble.'</li>
                        <li>Area: '.$area.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
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