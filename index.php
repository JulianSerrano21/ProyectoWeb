<!DOCTYPE html>
<html lang="en">

<head>
  <title>Chocolicioso</title>
  <link rel="icon" href="datosChoco/images/icono.png" type="image/png" />
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="codigoChoco/css/bootstrap.css">

  <!-- Estilos en CSS -->
  <style type="text/css">
    .carousel-caption {
      color: mintcream;
      background: rgba(125, 127, 125, 0.5);
      border-radius: 10px;
    }

    h5 {
      text-align: center;
      font-size: 1.75em;
    }

    .card {
      text-align: center;
    }
  </style>
</head>

<body>
  <!-- Imagen principal -->
  <!--<section class="container-fluid slider d-flex justify-content-center align-items-center">
      <h1 style="color: white" class="display-4">Tera Online</h1>
    </section>-->

  <!-- Sección del Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" style="height:100vh">
        <img class="d-block img-fluid" src="datosChoco/images/slide-1.jpg" alt="First slide" style="width: 100%;">
        <div class="carousel-caption d-none d-md-block">
          <h3>Productos artesanales</h3>
          <p>Cacao fresco y de alta calidad</p>
        </div>
      </div>
      <?php
      include('codigoChoco/php/conexion.php');

      $resultado = $conexion->query("Select * from slider") or die($conexion->error);
      while ($fila = mysqli_fetch_array($resultado)) { ?>
        <div class="carousel-item" style="height:100vh">
          <img class="d-block img-fluid" src="<?php echo $fila['imagen']; ?>" alt="Second slide" style="width: 100%;">
          <div class="carousel-caption d-none d-md-block">
            <h3><?php echo $fila['titulo']; ?></h3>
            <p><?php echo $fila['texto']; ?></p>
          </div>
        </div>
      <?php } ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>

  <?php
  include_once 'codigoChoco/header.php';
  ?>

  <!-- The Modal -->
  <?php
  include_once "codigoChoco/includes/login.inc.php";
  ?>

  <!-- Seccion de tarjetas -->
  <div class="card-deck" style="padding-top: 2em; padding-bottom: 2em;">
    <div class="card">
      <img src="datosChoco/images/cards2.jpg" class="card-img-top rounded-circle" alt="..." style="width: 100%; height: 50vh;">
      <div class="card-body">
        <h5 class="card-title">Arreglos personalizados</h5>
        <p class="card-text">Tenemos una seleccion de arreglos, combos y canastas perfectos para multiples ocasiones, no te quedes sin darle el regalo que se merece a esa persona especial.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card">
      <img src="datosChoco/images/cards1.jpg" class="card-img-top rounded-circle" alt="..." style="width: 100%; height: 50vh;">
      <div class="card-body">
        <h5 class="card-title">Seleccion al gusto</h5>
        <p class="card-text">Variedades de chocolate de todo tipo para que elijas tu favorito o pruebes algo nuevo; amargo, blanco, con mani, con nueces y un largo etc.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card">
      <img src="datosChoco/images/cards3.jpg" class="card-img-top rounded-circle" alt="..." style="width: 100%; height: 50vh;">
      <div class="card-body">
        <h5 class="card-title">Al por mayor</h5>
        <p class="card-text">Por supuesto no nos limitamos a los chocolates artesanales y arreglos, tambien tenemos un completo apartado para surtir tu negocio con los chocolates mas populares.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>

  <!-- Pie de pagina -->
  <footer class="bg-light text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
          </svg></a>

        <!-- Twitter -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
          </svg>
        </a>

        <!-- Instagram -->
        <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
          </svg>
        </a>

      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.3);">
      Contactate con nosotros en:
      <a class="text-white" href="https://mdbootstrap.com/">correo-ejemplo@gmail.com</a>
    </div>
    <!-- Copyright -->
  </footer>

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="codigoChoco/js/jquery.js"></script>
  <script src="codigoChoco/js/bootstrap.min.js"></script>
</body>

</html>