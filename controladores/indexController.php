<?php
require 'token.php';
require 'conexion.php';

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
$headers =  'Authorization:' . TOKEN . '';
curl_setopt($ch, CURLOPT_URL, 'http://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/6');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $headers);
$result = curl_exec($ch);
curl_close($ch);
$r = json_decode($result, true);


function modelo_inmueble($r)
{
    $counter= count($r)-1;
    if($counter > 4){
        $counter = 4;
    }

    for ($i = 0; $i < $counter; $i++) {
        $r[$i]['foto1'] = existeImagen(($r[$i]['foto1']));
        $api = $r[$i];
        $codigo = str_ireplace("951-", "", $api['Codigo_Inmueble']);
        echo '
        <div class="col-12 col-md-6 col-lg-3">
        <div class="property">
            <a href="detalle-Inmueble.php?co='.$api['Codigo_Inmueble'].'">
                <div class="property-image"><img alt="" src="'.$api['foto1'].'"></div>
                <div class="overlay">
                    <div class="info">';
                    if($api['Gestion'] == "Arriendo/venta"){
                        echo '
                            <div class="tag price">$ '.$api['Canon']. '/ $' .$api['Venta'].'</div>
                        ';
                    }else if($api['Gestion'] == 'Arriendo'){
                        echo '
                            <div class="tag price">$ '.$api['Canon'].'</div>
                        ';
                    }else{
                        echo '
                            <div class="tag price">$ '.$api['Venta'].'</div>
                        ';
                    }
                    echo '
                        <h3>'.$api['Gestion'].' - '.$api['Tipo_Inmueble'].'</h3>
                        <h3> Código: '.$codigo.'</h3>
                        <figure>'.$api['Barrio'].', '.$api['Ciudad'].'</figure>
                    </div>
                    <ul class="additional-info">
                        <li>
                            <header>Areá:</header>
                            <figure>'.$api['AreaConstruida'].'m<sup>2</sup></figure>
                        </li>
                        <li>
                            <header>Cuartos:</header>
                            <figure>'.$api['Alcobas'].'</figure>
                        </li>
                        <li>
                            <header>Baños:</header>
                            <figure>'.$api['banios'].'</figure>
                        </li>
                        <li>
                            <header>Garaje:</header>
                            <figure>'.$api['garaje'].'</figure>
                        </li>
                    </ul>
                </div>
            </a>
        </div>
    </div>
           ';
    }
}

function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}
