<?php $page = 'blog';
require_once('controladores/noticiasController.php');
 ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    <?php include 'include/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'include/menu.php'; ?>
    <!-- fin de menu -->
    <!-- contenido -->
    <section id="lista-noticias">
        <div class="container-fluid p0 pt-4 mt-4">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row">
                        <div class="col-12">
                            <h2>Proyectos</h2>
                            <hr>
                        </div>
                        <?php 
                            if(is_array($noticias_array)){
                                modelo_noticia($noticias_array);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin contenido -->
    <!-- Scripts en comun -->
    <div class="espacio-footer"></div><footer>
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