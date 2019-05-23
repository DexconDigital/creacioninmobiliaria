<?php $page = 'clientes'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Propietarios</title>
    <?php include 'include/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'include/menu.php'; ?>
    <!-- fin de menu -->
    <div class="container-fluid p-0" style="overflow:hidden">
        <section id="iframe">
            <iframe src="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=951&tipo=1" frameborder="0"></iframe>
        </section>
    </div>

    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
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