<?php
require_once ('conexion.php');
$id=$_REQUEST["id"];
$nombre=$_REQUEST["titulo"];
$descripcion=$_REQUEST["descripcion"];
$noticia=$_REQUEST["noticia"];
$foto=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$foto);
$destino="fotos/".$nombre_foto;
$comparador_fotos="fotos/";


$nombre_ar = $_FILES['archivo']['name'];
$tipo = $_FILES['archivo']['type'];
$tamanio = $_FILES['archivo']['size'];
$rutas = $_FILES['archivo']['tmp_name'];
$nombre_archivo = str_replace(" ","-",$nombre_ar);
$destinos="archivos/".$nombre_archivo;
$comparador_archivo="archivos/";

// No actualizar ni archivos ni noticias
if($destino == $comparador_fotos && $destinos == $comparador_archivo){
    $con1 = Conect();
     $qry1="SELECT * FROM noticias where id ='$id'";
            $sql1=mysqli_query($con1,$qry1);
            $res=  mysqli_fetch_array($sql1) ;
            
            $destino = $res[3];
    $con = Conect();
    $qry=("update noticias set nombre='$nombre', descripcion='$descripcion', noticia='$noticia' where id='$id'");
    $sql=mysqli_query($con,$qry);
        if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: lista-noticias.php");
    }
    // actualizar fotos pero no archivo
}
if($destino != $comparador_fotos && $destinos == $comparador_archivo){
    copy($ruta,$destino);
    $con = Conect();
    $qry=("update noticias set nombre='$nombre', descripcion='$descripcion', imagen='$destino',noticia='$noticia' where id='$id '");
    $sql=mysqli_query($con,$qry);  

    if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: lista-noticias.php");
    }
}
// actualizar archivo pero no imagen
if($destino == $comparador_fotos && $destinos != $comparador_archivo){
    copy($rutas,$destinos);
    $con = Conect();
    $qry=("update noticias set nombre='$nombre', descripcion='$descripcion', archivo='$destinos',noticia='$noticia' where id='$id '");
    $sql=mysqli_query($con,$qry);  

    if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: lista-noticias.php");
    }
}
// actualizar  ambas cosas
if($destino == $comparador_fotos && $destinos != $comparador_archivo){
    copy($rutas,$destinos);
    copy($ruta,$destino);
    $con = Conect();
    $qry=("update noticias set nombre='$nombre', descripcion='$descripcion', imagen='$destino, archivo='$destinos',noticia='$noticia' where id='$id '");
    $sql=mysqli_query($con,$qry);  

    if(!$sql){
        echo 'No se logro actualizar';
    }else{
        header("Location: lista-publicaciones.php");
    }
}
?>