<?php $page = 'inicio';
require_once('controladores/indexController.php');
?>
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
        <section id="hero" class="overflow-hidden">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/slide_1.png" class="d-block w-100" alt="slide_inmobiliaria">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide_2.png" class="d-block w-100" alt="slide_inmobiliaria">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slide_3.jpg" class="d-block w-100" alt="slide_inmobiliaria">
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
                        <h2 class="especialistas">Especialistas en Comercio</h2>
                    </div>
                </div>
                <div class="row justify-content-center mt-4 pt-4">
                    <div class="col-11">
                        <h4>Nuestros Servicios</h4>
                        <hr>
                    </div>
                    <div class="col-11">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-2">
                                            <div class="contenedor-icono d-flex justify-content-center align-items-center">
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="card-body">
                                                <h5 class="card-title">Colocación de marcas</h5>
                                                <p class="card-text">
                                                    Acompañamiento en el plan de expansion de su marca, informacion del sector y estudios de interes.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-2">
                                            <div class="contenedor-icono d-flex justify-content-center align-items-center">
                                                <i class="fas fa-comment-dollar"></i>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <div class="card-body">
                                                <h5 class="card-title">INVERSION/DES INVERSION</h5>
                                                <p class="card-text">
                                                    Las necesidades de nuestros clientes son diferentes, ¿cuál es la tuya? Las mejores transacciones se hacen con el mayor conocimiento del mercado, aquí estamos. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-2">
                                            <div class="contenedor-icono d-flex justify-content-center align-items-center">
                                                <i class="fas fa-user-lock"></i>
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
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-2">
                                            <div class="contenedor-icono d-flex justify-content-center align-items-center">
                                                <i class="fas fa-project-diagram"></i>
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
                    <div class="row justify-content-center" id="">
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
        </div>
    </section>
    <!-- fin de propiedades destacadas -->
    <!-- publica tu propiedad -->
    <section id="consigna">
        <div class="container-fluid mt-4 pt-4">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row border">
                        <div class="col-12 col-lg d-flex align-items-center">
                            <h5 class="text-center">¿Quieres que tu propiedad sea listada aquí?</h5>
                        </div>
                        <div class="col-12 col-lg-3 d-flex align-items-center">
                            <a href="#consignaInmueble" data-toggle="modal" class="btn btn-primary btn-lg btn-block ml-auto">Consigna tu inmueble</a>
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
                    <div class="row justify-content-center aling-items-center">
                        <div class="col-12 col-md-5 col-lg-3 d-flex justify-content-center aling-items-center">
                            <img src="images/SIMI.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-md-5 col-lg-3 d-flex justify-content-center aling-items-center">
                            <img src="images/Logo_Lonja.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-md-5 col-lg-3 d-flex justify-content-center aling-items-center">
                            <img src="images/unifianza.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-md-5 col-lg-3 d-flex justify-content-center aling-items-center">
                            <img src="images/seguros-sura.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin aliados -->
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
    </div>

    <!-- Modal -->
    <div class="modal fade" id="consignaInmueble" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Consigna tu Inmueble</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <form action="">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Nombre</label>
                                        <input type="text" class="form-control" id="" placeholder="Ingrese su Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Correo</label>
                                        <input type="email" class="form-control" id="" placeholder="Ingrese Correo">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Telefono</label>
                                        <input type="number" class="form-control" id="" placeholder="Ingrese Telefono">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Dirección</label>
                                        <input type="text" class="form-control" id="" placeholder="Ingrese su Dirección">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Tipo</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option selected disabled>Tipo</option>
                                            <option>Apartamento</option>
                                            <option>Bodegas</option>
                                            <option>Casa</option>
                                            <option>local de calle</option>
                                            <option value="">Lote</option>
                                            <option value="">Oficina</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Sector</label>
                                        <input type="text" class="form-control" id="" placeholder="Ingrese Sector">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Disponibilidad</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option selected disabled>Disponibilidad</option>
                                            <option>Arriendo</option>
                                            <option>Venta</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Areá</label>
                                        <input type="text" class="form-control" id="" placeholder="Ingrese Areá">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Mensaje:</label>
                                        <textarea class="form-control" id="" placeholder="Deje su mensaje" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Acepto la <a href="politica_de_datos.pdf" download="Politica de tratamiento de datos"> política de privacidad de datos.</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="">
                                            <strong> Nos reservamos el derecho de consignar el inmueble, de acuerdo a su ubicación y estado. </strong>
                                        </label>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Enviar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin del modal -->
    <!-- Scripts en comun -->
    <?php
    include 'include/archivosfooter.php';
    include 'include/boton-subir.php';
    ?>
    <script>
        $('#carouselExampleControls').carousel({
            interval: 2800
        })
    </script>
</body>

</html>