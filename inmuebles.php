<?php $page = 'inmuebles';
require_once('controladores/inmueblesController.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inmuebles</title>
    <?php include 'include/archivosheader.php'; ?>
    <style>
        @media (min-width: 576px) {}


        @media (min-width: 768px) {}


        @media (min-width: 992px) {}


        @media (min-width: 1200px) {}
    </style>
</head>

<body>
    <!-- Menu -->
    <?php include 'include/menu.php'; ?>
    <!-- fin de menu -->
    <?php include 'include/buscador.php'; ?>
    <!-- inmuebles  -->
    <section id="destacadas" class="propiedades">
        <div class="container-fluid p-0 mt-4 pt-4">
            <div class="row justify-content-center">
                <div class="col-11">
                    <h4>Lista de Inmuebles</h4>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row" id="">
                        <?php if ($r == 'Sin resultados') {
                            echo '<h2 class="text-center">
                                No Tiene Inmuebles Destacados
                            </h2>';
                        } else {
                            modelo_inmueble($r);
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
            <div class="col-12">
                <p class="text-center"><small id="pagina_numero"></small></p>
            </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item previus">
                            <a class="page-link" onclick="paginador('ant')">Atras</a>
                        </li>
                        <li class="page-item next">
                            <a class="page-link" onclick="paginador('sig')">Siguiente</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
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
    <?php echo '<script>var url = "'.$url_pagina.'"; </script>';?>                     
    <?php echo '<script>var pagina = '.$pag.'; </script>';?>
    <?php echo '<script>var totalpagina = '.$r['datosGrales']['totalPagina'].'; </script>';?>
    <?php echo '<script>var totalInmuebles = '.$r['datosGrales']['totalInmuebles'].'; </script>';?>
    <?php
    include 'include/archivosfooter.php';
    include 'include/boton-subir.php';
    ?>
</body>

</html>