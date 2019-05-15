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
        <section id="banner-noticias">
            <div class="container-fluid p-0 pt-4 mt-4"></div>
            <div class="row">
                <div class="banner-imagen">
                    <!-- Aqui va el banner -->
                </div>
            </div>
            <div class="row">
                <div class="col-2 offset-1 pt-4 mt-4 border-right">
                    <ul class="fecha-pdf">
                        <li><i class="far fa-calendar-alt mr-2"></i>Fecha</li>
                        <li><i class="far fa-file-pdf mr-2"></i>Descargar archivo</li>
                    </ul>
                </div>
                <div class="col-8 pt-4 mt-4">
                    <h2>Titulo de la noticia</h2>
                    <hr>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
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
    <?php include 'include/archivosfooter.php'; ?>
</body>

</html>