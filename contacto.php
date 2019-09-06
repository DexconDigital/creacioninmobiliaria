<?php $page = 'contacto'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <?php include 'include/archivosheader.php'; ?>
    <style>
    body{
        overflow-x:hidden;
    }
    </style>
</head>

<body>

    <!-- Menu -->
    <?php include 'include/menu.php'; ?>
    <!-- fin de menu -->
    <section id="contacto" class=" overflow-hidden">
        <div class="container-fluid p-2 pt-4 mt-4">
            <div class="row justify-content-center">
                <div class="col-11">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h2>Contáctanos</h2>
                            <hr>
                        </div>
                        <div class="col-12 col-lg-4 wow fadeInLeft" data-wow-delay="1s">
                            <ul>
                                <li><strong>Dirección</strong></li>
                                <li>cra. 25#1a sur - 155</li>
                                <li>Medellin, Antioquia</li>
                            </ul>
                            <ul>
                                <li><strong> Horario de Atención</strong></li>
                                <li>Lunes a Viernes 7:30am a 6:00pm</li>
                            </ul>
                            <ul>
                                <li> <strong> Fijo: </strong><a href="tel:+5743537590">(+574)353 7590 </a></li>
                                <li> <strong>WhatsApp: </strong><a href="http://wa.me/573137968073">3137968073</a></li>
                                <li> <strong>Celular: </strong><a href="tel:+573113318139">3113318139</a></li>
                                <li> <strong>Correo: </strong><a href="malito: info@creacioninmobiliaria.com">info@creacioninmobiliaria.com</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-8 wow fadeInRight" data-wow-delay="1s">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.513824901182!2d-75.56081478573421!3d6.195730828606955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e46829a65e973ed%3A0x2331d4869f9064bd!2sCra.+25+%231a-155%2C+Medell%C3%ADn%2C+Antioquia!5e0!3m2!1ses!2sco!4v1557934960570!5m2!1ses!2sco" width=100% height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="formulario">
        <div class="container-fluid p-0 pt-4 mt-4 wow fadeIn" data-wow-delay=".5s">
            <hr>
            <div class="row justify-content-center">
                <div class="col-11 col-md-10 col-lg-7">
                    <form action="">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">¿Cuál es tu solicitud?</label>
                            <select class="form-control" id="">
                                <option selected disabled>Seleccionar</option>
                                <option>Vender</option>
                                <option>Arrendar</option>
                                <option>Comprar</option>
                                <option>Asesoría</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nombre</label>
                            <input type="text" class="form-control" id="" placeholder="Ingrese su Nombre">
                        </div>
                        <div class="form-group">
                            <label for="">Correo</label>
                            <input type="email" class="form-control" id="" placeholder="Ingrese Correo">
                        </div>
                        <div class="form-group">
                            <label for="">Teléfono</label>
                            <input type="number" class="form-control" id="" placeholder="Ingrese teléfono">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mensaje:</label>
                            <textarea class="form-control" id="" placeholder="Deje su mensaje" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                Acepto la <a href="politica_de_datos.pdf" download="Politica de datos"/>política de privacidad</a> 
                                </label>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="espacio-footer"></div><footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 col-sm-12 text-center">
                    <span>©Copyright 2019 <a href="https://www.dexcondigital.com" target="_blank">Dexcon Digital.</a> Todos los derechos reservados</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts en comun -->
    <?php 
    include 'include/archivosfooter.php';
    include 'include/boton-subir.php';
     ?>
</body>

</html>