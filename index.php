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
    <!-- Menu -->
    <?php include 'include/menu.php'; ?>
    <!-- fin de menu -->
    <div class="container-fluid" style="overflow:hidden">
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
        <section id="buscador">
            <form>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">123</span>
                            </div>
                            <input type="text" id="codigo_buscar" class="form-control" placeholder="Codigo">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control" id="ciudad_buscar">
                                <option selected disabled>Ciudad</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control" id="barrio_buscar">
                                <option selected disabled>Barrio</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control" id="tipo_inmueble_buscar">
                                <option selected disabled>Inmueble</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control" id="tipo_gestion_buscar">
                                <option selected disabled>Gestion</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control" id="precio_buscar">
                                <option selected disabled>Precio</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary">Buscar</button>
                    </div>

            </form>
        </section>
        <!-- Fin buscador -->
        <!-- inicio informacion -->
        <section id="informacion">
            <div class="row">
                <div class="col-12">
                    <h3>Especialistas en comercio</h3>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2>Nuestros Servicios</h2>
                    </div>
                    <div class="col-3">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-2">
                                    <img src="..." class="card-img" alt="...">
                                </div>
                                <div class="col-md-10">
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
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-2">
                                    <img src="..." class="card-img" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title">Inversión/Desinversión</h5>
                                        <p class="card-text">
                                            Las necesidades de nuestros clientes son diferentes, cual es la tuya? Las mejores transacciones se hacen con el mayor conocimiento del mercado, aqui estamos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-2">
                                    <img src="..." class="card-img" alt="...">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title">Administracion inmobiliaria</h5>
                                        <p class="card-text">
                                            La mejor relacion es encontrar la satisfacccion de los dos partes PROPIETARIO E INQUILINO, tu cual eres?.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-2">
                                    <img src="..." class="card-img" alt="...">
                                </div>
                                <div class="col-md-10">
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
        </section>
        <!-- fin informacion -->
        <!-- propiedades destacadas -->
        <section id="destacadas">
            <div class="row">
                <div class="col-12">
                    <h1>Propiedades destacadas</h1>
                </div>
            </div>
            <div class="row">
                <div class="card-group">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Propiedad destacada</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Propiedad destacada</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Propiedad destacada</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fin de propiedades destacadas -->
        <!-- publica tu propiedad -->
        <section id="consigna">
            <div class="row">
                <div class="col-6">
                    <h1>¿Quieres que tu propiedad sea listada aquí?</h1>
                </div>
                <div class="col-6">
                    <h1>Consigna tu inmueble</h1>
                </div>
            </div>
        </section>
        <!-- fin publia tu propiedad -->
        <!-- aliados -->
        <section id="aliados">
            <div class="row">
                <div class="col-12">
                    Nuestros Aliados
                </div>
                <div class="col-12">
                    <!-- colocar  owl carousel -->
                </div>
            </div>
        </section>
        <!-- fin aliados -->
        <footer>
            <div class="row">
                <div class="col-12">
                    <span>©Copyright 2019 <a href="Dexcondigital.com"> Dexcon Digital.</a> Todos los derechos reservados</span>
                </div>
            </div>
        </footer>
        


    </div>
    <!-- Scripts en comun -->
    <?php include 'include/archivosfooter.php'; ?>
</body>

</html>