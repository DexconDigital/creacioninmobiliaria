<?php $page = 'blog';
require_once('controladores/detalle-noticiaController.php') ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyectos</title>
    <?php include 'include/archivosheader.php'; ?>
</head>
<style>
    .descargar{
        background-color: #13223F;
        color: white;
    }
    .descargar:hover{
        color: #13223F;
        background-color: white;
        border: 1px solid #13223F;
    }
</style>
<body>
    <!-- Menu -->
    <?php include 'include/menu.php'; ?>
    <!-- fin de menu -->
    <!-- contenido -->
    <section id="banner-noticias">
        <div class="container-fluid p-0 pt-4 mt-4"></div>
        <div class="row">
            <div class="banner-imagen">
                <img src="<?php echo $ruta_imagen ?>" alt="">
            </div>
        </div>
        <div class="row justify-content-center border">
            <div class="col-12 col-lg-2 pt-4 mt-4 border-right text-center">
                <ul class="fecha-pdf border pl-0">
                    <h5 class="mt-2">Para más información descargar aquí</h5>
                    <?php if ($comparador != $ruta_archivo) {
                        echo ' <a href="' . $ruta_archivo . '" download="Proyecto.pdf"  class="btn descargar mb-2"><i class="far fa-file-pdf mr-2"></i>Descargar Proyecto</a>';
                    } ?>
                             
            <!-- <a href="' . $ruta_archivo . '" download="Proyecto.pdf"  class="btn" style="background-color: #13223F; color:white;"><i class="far fa-file-pdf mr-2"></i>Descargar Proyecto</a> -->
                </ul>
            </div>
            <div class="col-10 col-lg-8 pt-4 mt-4 border">
                <h2><?php echo  $nombre ?></h2> <small><i class="far fa-calendar-alt mr-2"></i><?php echo $fecha_complete ?></small>
                <hr>
                <?php echo $noticia ?>
            </div>
        </div>

    </section>
    <!-- fin contenido -->
    <!-- Scripts en comun -->
    <div class="espacio-footer"></div>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 col-sm-12 text-center">
                    <span>©Copyright 2019 <a href="https://www.dexcondigital.com" target="_blank">Dexcon Digital.</a> Todos los derechos reservados</span>
                </div>
            </div>
        </div>
    </footer>
    <?php
    include 'include/archivosfooter.php';
    include 'include/boton-subir.php';
    ?>
</body>

</html>