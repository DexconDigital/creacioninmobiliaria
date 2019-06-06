<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../css/sb-admin.css">
    <link rel="stylesheet" href="../../css/all.css">
    <link rel="stylesheet" href="../css/style.css">
    <style type="text/css">
        #register_form fieldset:not(:first-of-type) {
        display: none;
        }
  </style>
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

<a class="navbar-brand mr-1" style="width:180px;" href="index.php">
    <img src="../../images/logo_negro.jpg" alt="..." class="img-fluid">
</a>

<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
  <i class="fas fa-bars"></i>
</button>

<!-- Navbar -->
<!-- Agregar icono de logout en este espacio -->
</nav>

<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Inicio</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-plus-square"></i>
          <span> Agregar Noticia</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-pen-square"></i>
          <span> Editar Noticias</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span> Lista de Noticias</span></a>
      </li>
    </ul>

    <div id="content-wrapper" style="background:#c8cfda21;">
        
    </div>
</div>

<script src="../../js/jquery.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../js/sb-admin.js"></script>
</body>
</html>