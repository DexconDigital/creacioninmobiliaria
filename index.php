<?php $page = 'inicio'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creacion Inmobiliaria</title>
    <?php include 'include/archivosheader.php'; ?>
</head>

<body>
    <div class="container-fluid p-0">
        <!-- Menu -->
        <?php include 'include/menu.php'; ?>
        <!-- fin de menu -->
        <section id="hero">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/slide-02.jpg" class="d-block w-100" alt="slide_inmobiliaria">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide-02.jpg" class="d-block w-100" alt="slide_inmobiliaria">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide-02.jpg" class="d-block w-100" alt="slide_inmobiliaria">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Atras</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </section>
        <!-- Buscador -->
        <?php include 'include/buscador.php'; ?>
        <!-- Fin buscador -->
        <!-- inicio informacion -->
        <section id="informacion">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="especialistas">Especialistas en comercio</h2>
                    </div>
                </div>
                <div class="row justify-content-center mt-4 pt-4">
                    <div class="col-11">
                        <h4>Nuestros Servicios</h4>
                        <hr>
                    </div>
                    <div class="col-11">
                        <div class="row">
                            <div class="col-3">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-2">
                                            <div class="contenedor-icono d-flex justify-content-center align-items-center">
                                                <i class="fas fa-info-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="card-body">
                                                <h5 class="card-title">Colocación de marcas</h5>
                                                <p class="card-text">
                                                    Las necesidades de nuestros clientes son diferentes, cual es la tuya? Las mejores transacciones se hacen con el mayor conocimiento del mercado, aqui estamos.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-2">
                                            <div class="contenedor-icono d-flex justify-content-center align-items-center">
                                                <i class="fas fa-info-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="card-body">
                                                <h5 class="card-title">INVERSION/DES INVERSION</h5>
                                                <p class="card-text">
                                                    Las necesidades de nuestros clientes son diferentes, cual es la tuya? Las mejores transacciones se hacen con el mayor conocimiento del mercado, aqui estamos. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-2">
                                            <div class="contenedor-icono d-flex justify-content-center align-items-center">
                                                <i class="fas fa-info-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="card-body">
                                                <h5 class="card-title">ADMINISTRACION INMOBILIARIA</h5>
                                                <p class="card-text">
                                                    La mejor relacion es encontrar la satisfacccion de los dos partes PROPIETARIO E INQUILINO, tu cual eres?
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-2">
                                            <div class="contenedor-icono d-flex justify-content-center align-items-center">
                                                <i class="fas fa-info-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="card-body">
                                                <h5 class="card-title">PROYECTOS</h5>
                                                <p class="card-text">
                                                    Sabemos comercializar, conocemos el mercado tu Poyecto, es nuestro Proyecto.
                                                </p>
                                            </div>
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
    <!-- fin informacion -->
    <!-- propiedades destacadas -->
    <section id="destacadas" class="propiedades">
        <div class="container-fluid p-0 mt-4 pt-4">
            <div class="row justify-content-center">
                <div class="col-11">
                    <h4>Propiedades destacadas</h4>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row">
                        <!-- Bloque Propiedad -->
                        <div class="col-md-3 col-sm-6">
                            <div class="property">
                                <a href="">
                                    <div class="property-image">
                                        <img alt="" src="images/no_image.png">
                                    </div>
                                    <div class="overlay">
                                        <div class="info">
                                            <div class="tag price">$123456</div>
                                            <h3>Gestion</h3>
                                            <figure>Ubicacion</figure>
                                        </div>
                                        <ul class="additional-info">
                                            <li>
                                                <header>Areá:</header>
                                                <figure>240m<sup>2</sup></figure>
                                            </li>
                                            <li>
                                                <header>Cuartos:</header>
                                                <figure>2</figure>
                                            </li>
                                            <li>
                                                <header>Baños:</header>
                                                <figure>2</figure>
                                            </li>
                                            <li>
                                                <header>Garaje:</header>
                                                <figure>0</figure>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div><!-- /.property -->
                        </div>
                        <!-- Bloque Propiedad -->
                        <div class="col-md-3 col-sm-6">
                            <div class="property">
                                <a href="">
                                    <div class="property-image">
                                        <img alt="" src="images/no_image.png">
                                    </div>
                                    <div class="overlay">
                                        <div class="info">
                                            <div class="tag price">$123456</div>
                                            <h3>Gestion</h3>
                                            <figure>Ubicacion</figure>
                                        </div>
                                        <ul class="additional-info">
                                            <li>
                                                <header>Areá:</header>
                                                <figure>240m<sup>2</sup></figure>
                                            </li>
                                            <li>
                                                <header>Cuartos:</header>
                                                <figure>2</figure>
                                            </li>
                                            <li>
                                                <header>Baños:</header>
                                                <figure>2</figure>
                                            </li>
                                            <li>
                                                <header>Garaje:</header>
                                                <figure>0</figure>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div><!-- /.property -->
                        </div>
                        <!-- Bloque Propiedad -->
                        <div class="col-md-3 col-sm-6">
                            <div class="property">
                                <a href="">
                                    <div class="property-image">
                                        <img alt="" src="images/no_image.png">
                                    </div>
                                    <div class="overlay">
                                        <div class="info">
                                            <div class="tag price">$123456</div>
                                            <h3>Gestion</h3>
                                            <figure>Ubicacion</figure>
                                        </div>
                                        <ul class="additional-info">
                                            <li>
                                                <header>Areá:</header>
                                                <figure>240m<sup>2</sup></figure>
                                            </li>
                                            <li>
                                                <header>Cuartos:</header>
                                                <figure>2</figure>
                                            </li>
                                            <li>
                                                <header>Baños:</header>
                                                <figure>2</figure>
                                            </li>
                                            <li>
                                                <header>Garaje:</header>
                                                <figure>0</figure>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div><!-- /.property -->
                        </div>
                        <!-- Bloque Propiedad -->
                        <div class="col-md-3 col-sm-6">
                            <div class="property">
                                <a href="">
                                    <div class="property-image">
                                        <img alt="" src="images/no_image.png">
                                    </div>
                                    <div class="overlay">
                                        <div class="info">
                                            <div class="tag price">$123456</div>
                                            <h3>Gestion</h3>
                                            <figure>Ubicacion</figure>
                                        </div>
                                        <ul class="additional-info">
                                            <li>
                                                <header>Areá:</header>
                                                <figure>240m<sup>2</sup></figure>
                                            </li>
                                            <li>
                                                <header>Cuartos:</header>
                                                <figure>2</figure>
                                            </li>
                                            <li>
                                                <header>Baños:</header>
                                                <figure>2</figure>
                                            </li>
                                            <li>
                                                <header>Garaje:</header>
                                                <figure>0</figure>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div><!-- /.property -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin de propiedades destacadas -->
    <!-- publica tu propiedad -->
    <section id="consigna">
        <div class="container-fluid mt-4 pt-4">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row border">
                        <div class="col-12 d-flex align-items-center">
                            <h5>¿Quieres que tu propiedad sea listada aquí?</h5>
                            <a href="" class="btn btn-primary ml-auto">Consigna tu inmueble</a>
                        </div>
                        <!-- <div class="col-3 offset-3 pr-0 mr-0">
                            <a href="" class="btn btn-primary">Consigna tu inmueble</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin publia tu propiedad -->
    <!-- aliados -->
    <section id="aliados">
        <div class="container-fluid p-0 mt-4 pt-4">
            <div class="row justify-content-center">
                <div class="col-11">
                    <h4>Nuestros Aliados</h4>
                    <hr>
                </div>
                <div class="col-12">
                   <div class="row justify-content-center">
                       <div class="col-6 d-flex justify-content-center">
                            <img src="images/SIMI.png" alt="">
                       </div>
                       <div class="col-6 d-flex justify-content-center">
                            <img src="images/Logo_Lonja.png" alt="">
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin aliados -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <span>©Copyright 2019 <a href="https://www.dexcondigital.com" target="_blank">Dexcon Digital.</a> Todos los derechos reservados</span>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <!-- Scripts en comun -->
    <?php include 'include/archivosfooter.php'; ?>
</body>

</html>