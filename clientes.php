<?php $page = 'clientes'; ?>
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
    <section id="cliente" class="mt-4 pt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-lg-7">
                    <div class="card mb-3 wow fadeInLeft" data-wow-delay="0.3s" >
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <a href="arrendatarios.php">
                                <img src="images/arrendatarios.png" class="card-img" alt="...">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Arrendatarios</h5>
                                    <!--<p class="card-text">TEXTO OPCIONAL</p>-->
                                    <a href="arrendatarios.php" class="btn btn-primary">Ingresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-11 col-lg-7">
                    <div class="card mb-3 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <a href="propietarios.php">
                                <img src="images/propietarios.png" class="card-img" alt="...">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Propietarios</h5>
                                    <!--<p class="card-text">TEXTO OPCIONAL</p>-->
                                    <a href="propietarios.php" class="btn btn-primary">Ingresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-11 col-lg-7">
                    <div class="card mb-3 wow fadeInLeft" data-wow-delay="0.5s">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <a href="https://gateway2.tucompra.com.co/sites/contextoinmobiliario" target="_blank">
                                <img src="images/Pagos_PSE.png" class="card-img" alt="...">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Pagos PSE</h5>
                                    <!--<p class="card-text">TEXTO OPCIONAL</p>-->
                                    <a href="" class="btn btn-primary">Ingresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-11 col-lg-7">
                    <div class="card mb-3 wow fadeInRight" data-wow-delay="0.5s">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="images/Formularios.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Formularios</h5>
                                    <!--<p class="card-text">TEXTO OPCIONAL</p>-->
                                    <a href="" class="btn btn-primary">Ingresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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