<?php $page = 'detalle-inmueble';
require_once('include/funciones-detalle-inmueble.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle Inmueble</title>
    <?php include 'include/archivosheader.php'; ?>
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/carrousel.inmuebles.css">
    <link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
    <meta property="og:title" content="<?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>" />
    <meta property="og:description" content="Inmueble ubicado en: <?php echo $r['barrio'] . ', ' . $r['ciudad'] . ', ' . $r['depto']; ?> " />
    <meta property="og:image" itemprop="image" content="<?php echo $r['fotos'][0]['foto']; ?>" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">

    <style>
        @media (max-width: 992px) {
            .asesor-titulo {
                font-size: 22px;
                text-align: center;
                padding: 0;
                margin-bottom: 5px;
            }

            .asesor-icono {
                width: 100%;
                text-align: center;
            }

            .asesor-item-icono {
                text-align: center;
                font-size: 17px;
                margin-bottom: 5px;
            }

            .segunda-columna {
                padding: 0;
            }
        }

        .asesor-titulo {
            font-size: 22px;
            margin-bottom: 5px;
        }

        .asesor-item-icono {
            font-size: 15px;
            margin-bottom: 5px;
        }
        #map {
            height: 350px;
            z-index: 20;
        }

        .leaflet-control {
            z-index: 200;
        }

        .leaflet-control {
            z-index: 20;
        }
    </style>
</head>

<body>
    
    <link itemprop="thumbnailUrl" href="<?php echo $r['fotos'][0]['foto']; ?>">
        <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
            <link itemprop="url" href="<?php echo $r['fotos'][0]['foto']; ?>">
        </span>
    <!-- Menu -->
    <?php include 'include/menu.php'; ?>
    <!-- fin de menu -->
    <!-- Scripts en comun -->

    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row mt-4">
                    <div class="col-12 p-0 titulo">
                        <h4>Ubicado en: </h4>
                        <h2>
                            <?php echo $r['barrio'] . ', ' . $r['ciudad'] ?>
                        </h2>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-0">
                        <div class="row">
                            <div class="col-12 ">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php
                                        echo '<div class="carousel-item active">
                                        <img src="' . $r['fotos'][0]['foto'] . '" class="d-block w-100" alt="...">
                                        </div>';
                                        for ($i = 1; $i < count($r['fotos']); $i++) {
                                            echo '<div class="carousel-item">
                                            <img src="' . $r['fotos'][$i]['foto'] . '" class="d-block w-100" alt="...">
                                            </div>';
                                        }
                                        ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 mt-1">
                                <ul class="row align-items-center justify-content-center pl-0 pr-0 list-style-none">
                                    <li class="col-12 col-md-auto d-flex justify-content-center"><a class="btn btn-primary boton-azul" style="font-size:1rem;" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=<?php echo $codigo ?>" target="_blank">Imprimir Ficha</a></li>
                                    <li class="col-12 col-md-auto ml-auto d-flex justify-content-center">Compartir por: </li>
                                    <li class="col-auto col-md-auto"><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.creacioninmobiliaria.com%2Fdetalle-inmueble.php%3Fco%3D<?php echo $codigo; ?>" target="_blank"><img src="images/facebook.png" alt="" style="height: 36px;"></a></li>
                                    <li class="col-auto col-md-auto "><a href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.creacioninmobiliaria.com%2Fdetalle-inmueble.php%3Fco%3D' . $codigo . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank"><img src="images/twitter.png" alt="" style="height: 36px;"></i></a></li>
                                    <li class="col-auto col-md-auto d-md-none m-top"><a href="<?php echo 'https://wa.me/?text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] . '%20http://www.creacioninmobiliaria.com/detalle-inmueble.php?co%3d' . $codigo ?>" target="_blank"><img src="images/whatsapp.png" alt="" style="height: 36px;"></a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-5">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <th class=text-left" scope="row">Código:</th>
                                            <td class="text-right"><?php echo $codigo ?></td>
                                        </tr>
                                        <!-- Validar si es arriendo, venta o arriendo venta -->
                                        <?php if ($r['Gestion'] == 'Arriendo/venta') {
                                            echo
                                                '<tr>
                                                    <th class=text-left" scope="row">Precio Arriendo:</th>
                                                    <td class="text-right">$' . number_format($r['ValorCanon']) . '</td>
                                                </tr>';
                                            echo
                                                '<tr>
                                                <th class=text-left" scope="row">Precio Venta:</th>
                                                <td class="text-right">$' . number_format($r['ValorVenta']) . '</td>
                                                </tr>';
                                        } else if ($r['Gestion'] == "Arriendo") {
                                            echo
                                                '<tr>
                                                    <th class=text-left" scope="row">Precio:</th>
                                                    <td class="text-right">$ ' . number_format($r['ValorCanon']) . '</td>
                                                </tr>';
                                        } else {
                                            echo
                                                '<tr>
                                                    <th class=text-left" scope="row">Precio:</th>
                                                    <td class="text-right">$ ' . number_format($r['ValorVenta']) . '</td>
                                                </tr>';
                                        }
                                        ?>

                                        <tr>
                                            <th class=text-left" scope="row">Tipo Inmueble:</th>
                                            <td class="text-right"><?php echo $r['Tipo_Inmueble'] ?></td>
                                        </tr>
                                        <tr>
                                            <th class=text-left" scope="row">Operación:</th>
                                            <td class="text-right"><?php echo $r['Gestion'] ?></td>
                                        </tr>
                                        <tr>
                                            <th class=text-left" scope="row">Área:</th>
                                            <td class="text-right"><?php echo $r['AreaConstruida'] ?> m<sup>2</sup></td>
                                        </tr>
                                        <tr>
                                            <th class=text-left" scope="row">Baños:</th>
                                            <td class="text-right"><?php echo $r['banos'] ?></td>
                                        </tr>
                                        <?php
                                        if ($r['Administracion'] != 0) {
                                            echo
                                                '<tr>
                                                    <th class=text-left" scope="row">Administración:</th>
                                                    <td class="text-right">$ ' . $r['Administracion'] . '</td>
                                                </tr>';
                                        }
                                        if ($r['garaje'] != 0) {
                                            echo
                                                '<tr>
                                                    <th class=text-left" scope="row">Garaje:</th>
                                                    <td class="text-right">' . $r['garaje'] . '</td>
                                                </tr>';
                                        }
                                        if ($r['alcobas'] != 0) {
                                            echo
                                                '<tr>
                                                    <th class=text-left" scope="row">Alcobas:</th>
                                                    <td class="text-right">' . $r['alcobas'] . '</td>
                                                </tr>';
                                        }

                                        ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 col-lg-7">
                                <h2 class="item-titulo">Descripción</h2>
                                <?php
                                echo '<p>' . $r['descripcionlarga'] . '</p>'
                                ?>
                            </div>
                            <?php
                            if (count($r['caracteristicasInternas']) > 0) {
                                echo
                                    '<div class="col-12 mt-4">
                                        <h2 class="item-titulo">Características internas</h2>
                                        <ul class="list-caracteristicas">';
                                for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';   
                                }
                                echo  '</ul>
                                    </div>';
                            }
                            if (count($r['caracteristicasExternas']) != 0) {
                                echo
                                    '<div class="col-12 mt-4">
                                        <h2 class="item-titulo">Características Externas</h2>
                                        <ul class="list-caracteristicas">';
                                for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>
                                    </div>';
                            }
                            if (count($r['caracteristicasAlrededores']) != 0) {
                                echo
                                    '<div class="col-12 mt-4">
                                        <h2 class="item-titulo">Características de los alrededores</h2>
                                        <ul class="list-caracteristicas">';
                                for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                    $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                    echo '<li>' . $caracteristicas . '</li>';
                                }
                                echo  '</ul>
                                    </div>';
                            }
                            if ($r['video'] != "") {
                                echo
                                    '<div class="col-12 mt-4">
                                        <iframe width="100%" height="320" src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>';
                            }
                            if ($r['latitud'] != "" && $r['longitud'] != "") {
                                echo
                                    '<div class="col-12 mt-4">
                                        <div id="map" class="w-100"></div>
                                    </div>';
                            }
                            ?>

                        </div>
                    </div>
                    <div class="col-12 col-lg-4 segunda-columna">
                        <div class="container-fluid">
                            <div class="row">
                                <h2 class="item-titulo text-center">Comunicate con el Asesor</h2>
                                <span class="col-12 pl-0 asesor-titulo"><?php echo $asesor ?></span>
                                <span class="col-12 pl-0 asesor-item-icono"><i class="fas fa-phone asesor-icono"></i> <a href="tel:+57<?php echo $r['asesor'][0]['celular']; ?>"><?php echo $r['asesor'][0]['celular']; ?></a></span>
                                <span class="col-12 pl-0 asesor-item-icono"><i class="far fa-envelope pr-1 asesor-icono"></i><a href="mailto:<?php echo $r['asesor'][0]['correo']; ?>"><?php echo $r['asesor'][0]['correo']; ?></a></span>
                                <h4 class="item-titulo mt-3">Deja que el asesor se comunique</h4>
                                <form class="w-100 mt-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Correo">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Teléfono">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="Mensaje"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Acepto la <a href="politica_de_datos.pdf" download="Politica de datos" />política de privacidad</a>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                                </form>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <h2 class="item-titulo mt-4 text-center">Propiedades Similares</h2>
                            <div class="row p-0" id="p_similares"></div>
                            <!-- Propeidades similares -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <?php
    echo '<script>var idCiudad = ' . $r['IdCiudad'] . '</script>';
    echo '<script>var idInmueble = ' . $r['IdTpInm'] . '</script>';
    include 'include/archivosfooter.php';
    include 'include/boton-subir.php';
    ?>
    <script src="mapas/leaflet.js" crossorigin=""></script>
    <script>
        var map = L.map('map').setView([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>], 14);

        L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=1rAGHv3KcO1nrS6S9cgI', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
        }).addTo(map);

        L.marker([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>]).addTo(map)
            .bindPopup('<img src="<?php echo $r['fotos'][0]['foto'] ?>"])" alt="" width="55px" height="auto"><br>Ubicación')
            .openPopup();
    </script>
</body>

</html>