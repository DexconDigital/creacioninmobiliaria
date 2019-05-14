<!-- estilos iniciales de menu -->
<style>
  @media (min-width: 992px) { 
      /* /menu */
      .padding-botton-lg-0{
          padding-bottom:  0;
      }
      .padding-left-lg-0{
          padding-left: 0;
      }
      .size-iconos{
          font-size: 13px;
      }
      .alto-opciones{
          height: 57px;
          display:flex;
          align-items: center;
      }
      .nav-item{
          height: inherit;
          display: flex;
          align-items: center;
      }
      .nav-item.nav-link.active{
          color:#fff !important;
          background-color: #13223f;
      }
      /* fin de menu */
  }
</style>
<!-- fin de estilos iniciales menu -->

<!-- conetnido emnu -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light padding-botton-lg-0 padding-left-lg-0">
<div class="container-fluid">
<div class="row w-100">
    <div class="col-12">
      <ul class="navbar-nav mr-auto d-none d-lg-flex size-iconos pl-4">
        <li class="mr-3"><a href="tel:+5743537590"><i class="fas fa-mobile-alt pr-2"></i>(+574) 353 7590</a></li>
        <li class="mr-3"><a href="mailto:info@creacioninmobiliaria.com"><i class="far fa-envelope pr-2"></i>info@creacioninmobiliaria.com</a></li>
        <li class="mr-3"><a href="tel:+573113318139"><i class="fas fa-phone pr-2"></i>3113318139</a></li>
        <li class="mr-3 ml-auto"><a href="wa.me/573137968073"><i class="fab fa-whatsapp pr-2"></i>3137968073</a></li>
        <li class="mr-3"><a href="https://www.facebook.com/CreacionInmobiliaria"><i class="fab fa-facebook pr-2"></i>Facebook</a></li>
      </ul>
    <div class="col-12 p-0 d-lg-flex aling-items-center">
        <a class="navbar-brand padding-botton-lg-0" href="#">
        <img src="images/logo_blanco.jpg" width="150" alt="">
        </a>
          <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto alto-opciones">
              <a class="nav-item nav-link <?php if($page=='inicio'){echo 'active';}?>" href="index.php">Inicio</a>
              <a class="nav-item nav-link <?php if($page=='quienes'){echo 'active';}?>" href="quienesSomos.php">Quienes Somos</a>
              <a class="nav-item nav-link <?php if($page=='inmuebles'){echo 'active';}?>" href="inmuebles.php">Inmuebles</a>
              <a class="nav-item nav-link <?php if($page=='clientes'){echo 'active';}?>" href="clientes.php">Clientes</a>
              <a class="nav-item nav-link <?php if($page=='blog'){echo 'active';}?>" href="blog.php">Proyectos</a>
              <a class="nav-item nav-link <?php if($page=='contacto'){echo 'active';}?>" href="contacto.php">Contáctenos</a>
            </div>
          </div>
  </div>
</div>
</div>  
</nav>
<!-- fin contendio menu -->