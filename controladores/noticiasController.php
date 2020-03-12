<?php

require_once("conexion.php");
require_once("admin-blog/admin/id_inmobiliaria/inmobiliaria.php");
$link = Conect();
$array = array();


$sql = "SELECT * FROM noticias  where id_inmobiliaria2 = '$id_inmobiliaria' order by id desc";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
while ($field = mysqli_fetch_array($result)) {
    $nombre = $field['nombre'];
    $id = $field['id'];
    $descripcion = $field['descripcion'];
    $imagen = $field['imagen'];
    $noticia = $field['noticia'];
    $fecha = $field['fecha'];
    $noticias_array[] = array(
        'titulo' => $nombre,
        'id' => $id,
        'descripcion' => $descripcion,
        'imagen' => $imagen,
        'noticia' => $noticia,
        'fecha' => $fecha
    );
}

function modelo_noticia($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $ruta_imagen = "./admin-blog/admin/" . $r[$i]['imagen'];
        echo'
            <div class="col-12">
                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-5 contenedor-image">
                            <img src="'.$ruta_imagen.'" alt="">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">'.$r[$i]['titulo'].'</h5>
                                <p class="card-text">'.$r[$i]['descripcion'].'</p>
                                <p class="card-text"><small class="text-muted">'.$r[$i]['fecha'].'</small></p>
                                <a href="detalle-blog.php?co='.$r[$i]['id'].'" class="btn btn-primary float-right" style="margin-bottom: 12px;">Ver Proyecto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';
    }
}
?>
