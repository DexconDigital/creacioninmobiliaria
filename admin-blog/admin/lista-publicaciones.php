<?php $page = "Lista de Noticias";
require("seguridad.php");
require_once("conexion.php");
require_once('id_inmobiliaria/inmobiliaria.php');
include 'layout/layout.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <h2 class="text-center">Lista de noticias</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                            $con=Conect();
                            $qry="select * from noticias where id_inmobiliaria2 = '$id_inmobiliaria' order by id DESC ";
                            $sql=mysqli_query($con,$qry);
                            while($res=  mysqli_fetch_array($sql)){
                            echo '<tr>
                                <td>'.$res["id"].'</td>
                                <td>'.$res["nombre"].'</td>
                                <td><a href="actualizarpublicacion.php?id='.$res["id"].'"><i class="fas fa-pen-square"></i></a></td>
                                <td><a href="eliminar.php?id='.$res["id"].'"><i class="fa fa-times"></i></a></td>
                            </tr>';}
                            ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Estas seguro de que quieres eliminar la noticia?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger btn-ok">Eliminar</button>
      </div>
    </div>
  </div>
</div>
<?php include 'layout/layoutFooter.php'; ?>