<?php $page = 'blog'; ?>
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
                            <h2>Lista de Noticias</h2>
                            <hr>
                        </div>
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-5 contenedor-image">
                                        
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title">Titulo de la Noticia</h5>
                                            <p class="card-text">Descripcion Corta de la noticia</p>
                                            <p class="card-text"><small class="text-muted">Fecha</small></p>
                                            <a href="detalle-blog.php" class="btn btn-primary float-right">Ver Noticia</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-5 contenedor-image">
                                        
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title">Titulo de la Noticia</h5>
                                            <p class="card-text">Descripcion Corta de la noticia</p>
                                            <p class="card-text"><small class="text-muted">Fecha</small></p>
                                            <a href="detalle-blog.php" class="btn btn-primary float-right">Ver Noticia</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-5 contenedor-image">
                                        
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title">Titulo de la Noticia</h5>
                                            <p class="card-text">Descripcion Corta de la noticia</p>
                                            <p class="card-text"><small class="text-muted">Fecha</small></p>
                                            <a href="detalle-blog.php" class="btn btn-primary float-right">Ver Noticia</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-5 contenedor-image">
                                        
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h5 class="card-title">Titulo de la Noticia</h5>
                                            <p class="card-text">Descripcion Corta de la noticia</p>
                                            <p class="card-text"><small class="text-muted">Fecha</small></p>
                                            <a href="detalle-blog.php" class="btn btn-primary float-right">Ver Noticia</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin contenido -->
    <!-- Scripts en comun -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
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