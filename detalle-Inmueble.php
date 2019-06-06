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
</head>

<body>
    <!-- Menu -->
    <?php include 'include/menu.php'; echo "<pre>";
	print_r($r);
	echo "</pre>";?>
    <!-- fin de menu -->
    <!-- Scripts en comun -->
    
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row mt-4">
                    <div class="col-12 titulo">
                        <h4>Ubicado en: </h4>
                        <h2>
                            <?php echo $r['barrio'] . ', ' . $r['ciudad'] ?>
                        </h2>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8">
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
                                        } else if($r['Gestion'] == "Arriendo") {
                                            echo
                                                '<tr>
                                                    <th class=text-left" scope="row">Precio:</th>
                                                    <td class="text-right">$ ' . number_format($r['ValorCanon']) . '</td>
                                                </tr>';
                                        }else{
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
                                            <th class=text-left" scope="row">Operacion:</th>
                                            <td class="text-right"><?php echo $r['Gestion'] ?></td>
                                        </tr>
                                        <tr>
                                            <th class=text-left" scope="row">Areá:</th>
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
                            <div class="col-7">
                                <h2 class="item-titulo">Descripción</h2>
                                <?php
                                echo '<p>' . $r['descripcionlarga'] . '</p>'
                                ?>
                            </div>
                            <?php
                            if (count($r['caracteristicasInternas']) > 0) {
                                echo
                                    '<div class="col-12 mt-4">
                                        <h2 class="item-titulo">Caracteristicas internas</h2>
                                        <ul class="list-caracteristicas">';
                                for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                    echo '<li>' . $r['caracteristicasInternas'][$i]['Descripcion'] . '</li>';
                                }
                                echo  '</ul>
                                    </div>';
                            }
                            if (count($r['caracteristicasExternas']) != 0) {
                                echo
                                    '<div class="col-12 mt-4">
                                        <h2 class="item-titulo">Caracteristicas Externas</h2>
                                        <ul class="list-caracteristicas">';
                                for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                    echo '<li>' . $r['caracteristicasExternas'][$i]['Descripcion'] . '</li>';
                                }
                                echo  '</ul>
                                    </div>';
                            }
                            if (count($r['caracteristicasAlrededores']) != 0) {
                                echo
                                    '<div class="col-12 mt-4">
                                        <h2 class="item-titulo">Caracteristicas de los alrededores</h2>
                                        <ul class="list-caracteristicas">';
                                for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                    echo '<li>' . $r['caracteristicasAlrededores'][$i]['Descripcion'] . '</li>';
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
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5132168991745!2d-75.56084008573426!3d6.195811728606066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4682909364c4ef%3A0xdad1811edccdf71f!2sEdificio+Platinum+Superior!5e0!3m2!1ses!2sco!4v1559828906319!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>';
                            }
                            ?>

                        </div>


                    </div>
                    <div class="col-11 col-lg-4">
                        <div class="container-fluid">
                            <div class="row">
                            <h2 class="item-titulo text-center">Comunicate con el Asesor</h2>
                            <span class="col-12 pl-0"><?php echo $asesor?></span>
                            <span class="col-12 pl-0"><i class="fas fa-phone"></i> <?php echo $r['asesor'][0]['celular'];?> </span>
                            <span class="col-12 pl-0"><i class="far fa-envelope pr-1"></i><?php echo $r['asesor'][0]['correo'];?></span>
                            <h4 class="item-titulo mt-3">Deja que el asesor se comunique</h4>
                            <form class="w-100 mt-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correó">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Telefono">
                                </div>
                                <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="Mensaje"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                            </form>
                            </div>
                        </div>
                        <div class="container-fluid">
                        <h2 class="item-titulo mt-4 text-center">Propiedades Similares</h2>
                        <div class="property"><a href=""><div class="property-image"><img alt="" src="https://lh3.googleusercontent.com/0JoSgJjfrSpSS5Len2ji94BSrfd0LDorGPUjMv5uwHXf8I4P4x7cMggHpL1fyIvTJa_eJABKcD_cH-2TKdLcRSlos_lbtBv9=s640"></div><div class="overlay"><div class="info"><div class="tag price">$ 25,186,800</div><h3>Arriendo</h3><figure>El Poblado Loma Del Indio, Medellin</figure></div><ul class="additional-info"><li><header>Areá:</header><figure>210m<sup>2</sup></figure></li><li><header>Cuartos:</header><figure>0</figure></li><li><header>Baños:</header><figure>1</figure></li><li><header>Garaje:</header><figure>0</figure></li></ul></div></a></div>
                        <div class="property"><a href=""><div class="property-image"><img alt="" src="https://lh3.googleusercontent.com/0JoSgJjfrSpSS5Len2ji94BSrfd0LDorGPUjMv5uwHXf8I4P4x7cMggHpL1fyIvTJa_eJABKcD_cH-2TKdLcRSlos_lbtBv9=s640"></div><div class="overlay"><div class="info"><div class="tag price">$ 25,186,800</div><h3>Arriendo</h3><figure>El Poblado Loma Del Indio, Medellin</figure></div><ul class="additional-info"><li><header>Areá:</header><figure>210m<sup>2</sup></figure></li><li><header>Cuartos:</header><figure>0</figure></li><li><header>Baños:</header><figure>1</figure></li><li><header>Garaje:</header><figure>0</figure></li></ul></div></a></div>
                        <div class="property"><a href=""><div class="property-image"><img alt="" src="https://lh3.googleusercontent.com/0JoSgJjfrSpSS5Len2ji94BSrfd0LDorGPUjMv5uwHXf8I4P4x7cMggHpL1fyIvTJa_eJABKcD_cH-2TKdLcRSlos_lbtBv9=s640"></div><div class="overlay"><div class="info"><div class="tag price">$ 25,186,800</div><h3>Arriendo</h3><figure>El Poblado Loma Del Indio, Medellin</figure></div><ul class="additional-info"><li><header>Areá:</header><figure>210m<sup>2</sup></figure></li><li><header>Cuartos:</header><figure>0</figure></li><li><header>Baños:</header><figure>1</figure></li><li><header>Garaje:</header><figure>0</figure></li></ul></div></a></div>
                        <div class="property"><a href=""><div class="property-image"><img alt="" src="https://lh3.googleusercontent.com/0JoSgJjfrSpSS5Len2ji94BSrfd0LDorGPUjMv5uwHXf8I4P4x7cMggHpL1fyIvTJa_eJABKcD_cH-2TKdLcRSlos_lbtBv9=s640"></div><div class="overlay"><div class="info"><div class="tag price">$ 25,186,800</div><h3>Arriendo</h3><figure>El Poblado Loma Del Indio, Medellin</figure></div><ul class="additional-info"><li><header>Areá:</header><figure>210m<sup>2</sup></figure></li><li><header>Cuartos:</header><figure>0</figure></li><li><header>Baños:</header><figure>1</figure></li><li><header>Garaje:</header><figure>0</figure></li></ul></div></a></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'include/archivosfooter.php';
    include 'include/boton-subir.php';
    ?>
</body>

</html>