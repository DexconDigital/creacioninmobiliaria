<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<?php

if ($page == "inicio" || $page == "inmuebles") {
    echo '<script src="conexion_api/token_api.js"></script>';
    echo '<script src="conexion_api/validadores.js"></script>';
    echo '<script src="conexion_api/buscador.js"></script>';
}
if ($page == "inmuebles") {
    echo '<script src="js/responsive-paginate.js"></script>';
}
if ($page == "detalle-inmueble") {
    echo '<script src="conexion_api/token_api.js"></script>';
    echo '<script src="conexion_api/validadores.js"></script>';
    echo '<script src="conexion_api/modelo_inmueble.js"></script>';
    echo '<script src="conexion_api/similares.js"></script>';
}
