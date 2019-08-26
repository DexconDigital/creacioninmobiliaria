<?php
require_once 'conexion.php';
require_once('id_inmobiliaria/inmobiliaria.php');

$nombre=$_REQUEST["titulo"];
$descripcion=$_REQUEST["descripcion"];
$fecha=$_REQUEST["fecha"];
$noticia= $_POST["noticia"];
$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
$fecha = date("Y-m-d");
$id_inmo = $id_inmobiliaria;

$nombre_ar = $_FILES['archivo']['name'];
if($nombre_ar != ""){
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $rutas = $_FILES['archivo']['tmp_name'];
    $nombre_archivo = str_replace(" ","-",$nombre_ar);
    $destinos="archivo/".$nombre_archivo; 
    
    $con = Conect();
        copy($rutas,$destinos);
}

$con = Conect();
    copy($ruta,$destino);

    if($nombre_ar!=""){
        mysqli_query($con, "INSERT INTO `noticias` (`id`, `nombre`, `descripcion`, `imagen`, `archivo`, `noticia`, `fecha`, `id_inmobiliaria2`) VALUES (NULL, '$nombre', '$descripcion', '$destino', '$destinos', '$noticia', '$fecha', '$id_inmo')");
        header("Location: lista-publicaciones.php");
    }else{
        mysqli_query($con, "INSERT INTO `noticias` (`id`, `nombre`, `descripcion`, `imagen`, `archivo`, `noticia`, `fecha`, `id_inmobiliaria2`) VALUES (NULL, '$nombre', '$descripcion', '$destino', '', '$noticia', '$fecha', '$id_inmo')");
        header("Location: lista-publicaciones.php");
    }
?>