<?php $page = 'inmuebles';
    if (isset($_GET["pag"])) {
        $pagina = $_GET["pag"];
    } else {
        $pagina = 1;
    }
    $ciudad = 0;
    $barrio = 0;
    $gestion = 0;
    $tipo_inmueble = 0;
    $alcobas = 0;
    $banos = 0;
    $min = 0;
    $max = 0;

    if (
        isset($_GET["ci"]) || isset($_GET["bar"]) || isset($_GET["ge"]) || isset($_GET["in"])
        || isset($_GET["al"]) || isset($_GET["ban"]) || isset($_GET["min"]) || isset($_GET["max"])
    ) {
        $ciudad = $_GET["ci"];
        $barrio = $_GET["bar"];
        $gestion = $_GET["ge"];
        $tipo_inmueble = $_GET["in"];
        $alcobas = $_GET["al"];
        $banos = $_GET["ban"];
        $min = $_GET["min"];
        $max = $_GET["max"];
    }
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
        @media (min-width: 576px) {

        }

        
        @media (min-width: 768px) {

         }

        
        @media (min-width: 992px) { 

        }

        
        @media (min-width: 1200px) { 

        }
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
                    <div class="row" id="inm">
                        <!-- Bloque Propiedad -->

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
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
        echo '<script>var pagina = ' . $pagina . '</script>';
        echo '<script>var ciudad = ' . $ciudad . '</script>';
        echo '<script>var barrio = ' . $barrio . '</script>';
        echo '<script>var gestion = ' . $gestion . '</script>';
        echo '<script>var tipo_inmueble = ' . $tipo_inmueble . '</script>';
        echo '<script>var alcobas = ' . $alcobas . '</script>';
        echo '<script>var banos = ' . $banos . '</script>';
        echo '<script>var min = ' . $min . '</script>';
        echo '<script>var max = ' . $max . '</script>';
    include 'include/archivosfooter.php';
    include 'include/boton-subir.php';
    ?>
</body>

</html>