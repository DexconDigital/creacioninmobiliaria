<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<?php 

if($page == "inicio" || $page == "inmuebles"){
echo '<script src="conexion_api/token_api.js"></script>';
echo '<script src="conexion_api/validadores.js"></script>';
echo '<script src="conexion_api/buscador.js"></script>';
echo '<script src="conexion_api/modelo_inmueble.js"></script>';
}
if ($page == "inicio"){
echo '<script src="conexion_api/inmuebles_destacados.js"></script>';
}
if($page == "inmuebles"){
echo '<script src="conexion_api/listarInmuebles.js"></script>';
}