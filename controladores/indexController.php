<?php
require_once 'token.php';
require 'conexion.php';
require 'modelo_inmueble.php';
$heroImg = array(
    1 => array(
        'imagen' => 'images/slide1.png',
        'alt' => 'Imagenes del carousel de Dimensiones'
    ),
    2 => array(
        'imagen' => 'images/slide2.png',
        'alt' => 'Imagenes del carousel de Dimensiones'
    ),
    3 => array(
        'imagen' => 'images/slide3.png',
        'alt' => 'Imagenes del carousel de Dimensiones'
    )
);

$ch = curl_init();
    $headers =  'Authorization:' . TOKEN;
    curl_setopt($ch, CURLOPT_URL,'http://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/12');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_USERPWD, $headers);
    $result = curl_exec($ch);
    curl_close($ch);
    $api = json_decode($result, true);


function modelo_inmueble($r)
{
    if (is_array($r)) {
        $cantidad_inmuebles= count($r)-1;
        modelo_inmueble2($r, $cantidad_inmuebles);
} else {
    echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
}
    
    
}

function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}
