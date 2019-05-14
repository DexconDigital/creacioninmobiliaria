<?php $page = 'inmuebles'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inmuebles</title>
    <?php include 'include/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'include/menu.php'; ?>
    <!-- fin de menu -->
    <section id="buscador">
        <div class="container-fluid">
            <form>
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">123</span>
                            </div>
                            <input type="text" id="codigo_buscar" class="form-control" placeholder="Codigo">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control" id="ciudad_buscar">
                                <option selected disabled>Ciudad</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control" id="barrio_buscar">
                                <option selected disabled>Barrio</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control" id="tipo_inmueble_buscar">
                                <option selected disabled>Inmueble</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control" id="tipo_gestion_buscar">
                                <option selected disabled>Gestion</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control" id="precio_buscar">
                                <option selected disabled>Precio</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <button class="btn btn-primary">Buscar</button>
                    </div>

            </form>
        </div>
    </section>

    <!-- Scripts en comun -->
    <!-- inmuebles  -->
    <section id="inmeubles">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Propiedades destacadas</h1>
                </div>
            </div>
            <div class="row">
                <div class="card-group">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Propiedad destacada</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Propiedad destacada</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Propiedad destacada</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <?php include 'include/archivosfooter.php'; ?>
</body>

</html>