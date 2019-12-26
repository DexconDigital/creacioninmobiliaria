<?php $page = 'inmuebles';
require_once('controladores/inmueblesController.php');
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
        @media (min-width: 576px) {}


        @media (min-width: 768px) {}


        @media (min-width: 992px) {}


        @media (min-width: 1200px) {}
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
                    <div class="row" id="">
                        <?php if ($r == 'Sin resultados') {
                            echo '<h2 class="text-center">
                                No Se Encontraron Inmuebles
                            </h2>';
                        } else {
                            modelo_inmueble($r);
                        }
                        ?>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <p class="text-center"><small id="pagina_numero"></small></p>
                </div>
                <?php if (is_array($r)) : ?>
                    <ul class="pagination mt-4 align-items-end justify-content-center">
                        <?php if ($paginator->getPrevUrl()) : ?>
                            <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo; Atras</a></li>
                        <?php endif; ?>
                        <?php foreach ($paginator->getPages() as $page) : ?>
                            <?php if ($page['url']) : ?>
                                <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                    <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                                </li>
                            <?php else : ?>
                                <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <?php if ($paginator->getNextUrl()) : ?>
                            <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">Siguiente &raquo;</a></li>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </section>
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
    include 'include/archivosfooter.php';
    include 'include/boton-subir.php';
    ?>
</body>

</html>