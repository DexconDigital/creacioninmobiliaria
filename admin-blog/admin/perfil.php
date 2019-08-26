<?php $page = "Agregar Noticia";
require("seguridad.php");
require_once("conexion.php");
include 'layout/layout.php';
$user=$_SESSION["usuarioactual"];
$con = Conect();
$qry = "SELECT * FROM usuarios where usuario ='$user'";
$sql = mysqli_query($con, $qry);
$usuario =  mysqli_fetch_array($sql);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <h2 class="text-center">Perfil</h2>
            <form class="form-horizontal" method="post" action="updateperfil.php" enctype="multipart/form-data" >
                    <input type="hidden" name="id" value="<?php echo $usuario[0]; ?>" >
                    <input type="hidden" name="usuario" value="<?php echo $usuario[1]; ?>">
                    <div class="form-group row">
                        <label for="disabledinput" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pass" id="pass" value="<?php echo $usuario[2]; ?>"  required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="disabledinput" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $usuario[3]; ?>"  required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="disabledinput" class="col-sm-2 control-label">Teléfono</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $usuario[4]; ?>"  required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="disabledinput" class="col-sm-2 control-label">Cargo</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="cargo" id="cargo" value="<?php echo $usuario[5]; ?>"  required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="disabledinput" class="col-sm-2 control-label">Dependencia</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="dependencia" id="dependencia" value="<?php echo $usuario[6]; ?>"  required>
                        </div>
                    </div>
                    <div class="bs-example" data-example-id="form-validation-states">
                    <div class="form-group row">
                        <label for="noticia" class="col-sm-2 control-label">Imagen Perfil Actual</label>
                        <div class="col-sm-8">
                            <img width="70px" height="" src="<?php echo $usuario[7];?>">
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label class="col-2 control-label" for="noticia">Subir Nueva Imagen</label>
                        <div class="col-8">
                            <input type="file" name="imagen" id="imagen">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-8 offset-2">
                                <button class="btn btn-primary">Actualizar Perfil</button>
                                <a href="index.php" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </div>
                    </div>
					</div>
                </form>
        </div>
    </div>
</div>
<?php include 'layout/layoutFooter.php'; ?>