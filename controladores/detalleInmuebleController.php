<?php
require 'token.php';
$url_pagina = $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
$co = 0;
if (isset($_GET["co"])) {
    $co = ($_GET["co"]);
}
$ch = curl_init();
$headers =  'Authorization:' . TOKEN . '';
curl_setopt($ch, CURLOPT_URL, 'http://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/' . $co . '');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $headers);
$result = curl_exec($ch);
curl_close($ch);
$r = json_decode($result, true);


$venta = number_format($r['ValorVenta']);
$arriendo = number_format($r['ValorCanon']);
$area = number_format($r['AreaConstruida']);

function carousel($r)
{   
    if(!isset($r['fotos'])){
        echo '<div class="carousel-item">
                <img src="images/no_image.png">
            </div>';
    }else{
    for ($i = 1; $i < count($r['fotos']); $i++) {
        echo '<div class="carousel-item">
                <img src="' . $r['fotos'][$i]['foto'] . '">
            </div>';
    }
    }
}

$ch = curl_init();
$headers =  'Authorization:' . TOKEN . '';
curl_setopt($ch, CURLOPT_URL, 
$url = 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/1/total/6/departamento/0/ciudad/'.$r['IdCiudad'].'/zona/0/barrio/0/tipoInm/'.$r['IdTpInm'].'/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/desc/banios/0/alcobas/0/garajes/0/sede/0/usuario/0');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $headers);
$result = curl_exec($ch);
curl_close($ch);
$similares = json_decode($result, true);
if(!is_array($similares))
{
    $ch = curl_init();
    $headers =  'Authorization:' . TOKEN . '';
    curl_setopt($ch, CURLOPT_URL, 
    $url = 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/1/total/6/departamento/0/ciudad/'.$r['IdCiudad'].'/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/desc/banios/0/alcobas/0/garajes/0/sede/0/usuario/0');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_USERPWD, $headers);
    $result = curl_exec($ch);
    curl_close($ch);
    $similares = json_decode($result, true);
}

function modelo_inmueble($r){
    $r = $r['Inmuebles'];
    for ($i = 0; $i < count($r); $i++) {
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
                            <div class="tag price">$ '.$api['Canon']. ' / $' .$api['Venta'].'</div>
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
function existeImagen($r){
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}
