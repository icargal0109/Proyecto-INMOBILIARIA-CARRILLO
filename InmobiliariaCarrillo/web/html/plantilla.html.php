<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Inmobiliaria Carrillo - <?= $titulo ?></title>

    <!-- CSS principal de Bootstrap -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Archivos CSS adicionales -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 591 villa agency

https://templatemo.com/tm-591-villa-agency

-->
  </head>

<body>

  <!-- ***** Inicio del precargador ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Fin del precargador ***** -->

  <div class="sub-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <ul class="info">
            <li><i class="fa fa-envelope"></i> info@inmobiliariacarrillo.es</li>
            <li><i class="fa fa-map"></i> Avenida Ricardo Soriano 42, 29601 Marbella</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-4">
          <ul class="social-links">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ***** Inicio de la cabecera ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Inicio del logo ***** -->
                    <a href="index.php" class="logo">
                        <h1>Carrillo</h1>
                    </a>
                    <!-- ***** Fin del logo ***** -->
                    <!-- ***** Inicio del menú ***** -->
                    <ul class="nav">
                      <li><a href="index.php" class="<?= $vista == 'index' ? 'active' : '' ?>">Inicio</a></li>
                      <li><a href="propiedades.php" class="<?= $vista == 'propiedades' ? 'active' : '' ?>">Propiedades</a></li>
                      <li><a href="detalle.php" class="<?= $vista == 'detalle' ? 'active' : '' ?>">Detalles de la propiedad</a></li>
                      <li><a href="contactar.php" class="<?= $vista == 'contactar' ? 'active' : '' ?>">Contacto</a></li>
                      <li><a href="#"><i class="fa fa-calendar"></i> Reservar una visita</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menú</span>
                    </a>
                    <!-- ***** Fin del menú ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Fin de la cabecera ***** -->

   <?php include __DIR__ . '/' . $vista . '.html.php'; ?>

  <footer>
    <div class="container">
      <div class="col-lg-8">
        <p>Copyright © 2026 Inmobiliaria Carrillo S.L. Todos los derechos reservados. 
        
        Diseño: <a rel="nofollow" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- JavaScript principal de Bootstrap -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>