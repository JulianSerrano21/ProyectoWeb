<?php
	include('php/conexion.php');
	if (isset($_GET['id'])) {
		$resultado = $conexion ->query("Select * from producto where id_producto =".$_GET['id']) or die($conexion ->error);
		if (mysqli_num_rows($resultado) > 0) {
			$fila = mysqli_fetch_row($resultado);
		}
		else{
			echo "error1";
		}
	}
	else{
		echo "error2";
	}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Chocolicioso</title>
    <link  rel="icon"   href="../datosChoco/images/icono.png" type="image/png" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Estilos en CSS -->
    <style type="text/css">
      .carousel-caption{
        color: mintcream;
        background: rgba(125, 127, 125, 0.5);
        border-radius: 10px;
      }
      h5{
        text-align: center;
        font-size: 1.75em;
      }
      .card{
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
  <body style="padding-top: 5em;">

<!-- menu de navegacion -->
<?php include('header.php'); ?>

	<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo $fila[6]; ?>" alt="<?php echo $fila[1]; ?>" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $fila[1]; ?></h2>
            <p><?php echo $fila[4]; ?></p>
            <p style="color: gray;">En stock: <?php echo $fila[2]; ?></p>
            <p><strong class="text-primary h4">$<?php echo $fila[3]; ?></strong></p>

            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
            <p><a href="cart.php" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p>

          </div>
        </div>
      </div>
    </div>



<!-- Pie de pagina -->
<?php include('footer.php'); ?>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>