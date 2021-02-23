<!DOCTYPE html>
<html lang="en">

<head>
  <title>Chocolicioso</title>
  <link rel="icon" href="../datosChoco/images/icono.png" type="image/png" />
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">

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

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>

<body class="text-center">

  <!-- menu de navegacion -->
  <?php include_once('header.php'); ?>
  <!-- Informacion -->
  <div class="jumbotron" style="padding-top: 5em;">
    <h1>¿Quienes somos?</h1>
    <p>Somos una empresa dedicada completamente al negocio del chocolate, funcionamos como productores y distribuidores.</p>
    <p>Con nosotros puedes encontrar los productos que necesites para tus celebraciones y eventos mas importantes o, incluso,
      surtir tu negocio con los mejores precios y la mas alta calidad de nuestros productos distribuidos.</p>
    <p>Para esa persona especial siempre tendremos lo que buscas. Tenemos una amplia seleccion de paquetes pre-establecidos con chocolates premium
      y artesanales. Si no encuentras lo que buscas puedes realizar encargos personalizados contactandote directamente con nosotros, aunque este tipo de servicio estara sujeto a disponibilidad de stock y tiempo.</p>
  </div>

  <img src="../datosChoco/images/logo.png" alt="...">

  <!-- Pie de pagina -->
  <?php include('footer.php'); ?>

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>