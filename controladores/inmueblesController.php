<?php 
require 'vendor/autoload.php';
use JasonGrimes\Paginator;
require 'token.php';

$url_pagina = $_SERVER["REQUEST_URI"];
$ci = 0;
$bar = 0;
$ge = 0;;
$in = 0;
$al = 0;
$ban = 0;
$premin= 0;
$premax = 0;
$armin = 0;
$armax = 0;
$pag = 1;

if(isset($_GET['pag'])){
    $pag = $_GET['pag'];
}
if(isset($_GET['ci'])){
    $ci = $_GET['ci'];
    $bar = $_GET['bar'];
    $ge = $_GET['ge'];
    $in = $_GET['in'];
    $al = $_GET['al'];
    $ban = $_GET['ban'];
    $premin = $_GET['premin'];
    $premax = $_GET['premax'];
    $armin = $_GET['armin'];
    $armax = $_GET['armax'];
}


$ch = curl_init();
$headers =  'Authorization:' . TOKEN . '';
curl_setopt($ch, CURLOPT_URL, 
$url = 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/'.$pag.'/total/12/departamento/0/ciudad/'.$ci.'/zona/0/barrio/'.$bar.'/tipoInm/'.$in.'/tipOper/'.$ge.'/areamin/'.$armin.'/areamax/'.$armax.'/valmin/'.$premin.'/valmax/'.$premax.'/campo/0/order/desc/banios/'.$ban.'/alcobas/'.$al.'/garajes/0/sede/0/usuario/0');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $headers);
$result = curl_exec($ch);
curl_close($ch);
$r = json_decode($result, true);



function modelo_inmueble($r){
    $r = $r['Inmuebles'];
    for ($i = 0; $i < count($r); $i++) {
        $r[$i]['foto1'] = existeImagen(($r[$i]['foto1']));
        $api = $r[$i];
        $codigo = str_ireplace("951-", "", $api['Codigo_Inmueble']);
        echo '
        <div class="col-12 col-md-6 col-lg-3 wow fadeIn">
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

function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}


$valor_reemplazar = '&pag='.$pag.'';
$url_pagina = str_ireplace($valor_reemplazar, '', $url_pagina);
$totalItems = $r['datosGrales']['totalInmuebles'];
$itemsPerPage = 12;
$currentPage = $pag;
$urlPattern = $url_pagina.'&pag=(:num)';

$paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);