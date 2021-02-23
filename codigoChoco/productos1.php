<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Productos</title>
    <link  rel="icon"   href="../datosChoco/images/icono.png" type="image/png" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Estilos en CSS -->
    <style type="text/css">
      h5{
        text-align: center;
        font-size: 1.75em;
      }
      a:hover{
        text-decoration: none;
      }
    </style>

  </head>
  <body style="padding-top: 5em;">

<!-- menu de navegacion -->
<?php include('header.php'); ?>

<div class="row mb-5">
<?php 
include('php/conexion.php'); 

$resultado = $conexion ->query("Select * from producto where categoria = 1") or die($conexion ->error);
while( $fila = mysqli_fetch_array($resultado)){ ?>

  <!--Tarjeta de producto-->
  <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
    <div class="block-4 text-center" style="border:1px solid gray; border-radius: 5px;">
      <figure class="block-4-image">
        <a href="producto-unico.php?id=<?php echo $fila['id_producto']; ?>"><img src="<?php echo $fila['imagen']; ?>" class="img-fluid rounded" style="height: 50vh;"></a>
      </figure>
      <div class="block-4-text p-4">
        <h3><a href=""><?php echo $fila['nombre']; ?></a></h3>
        <p class="mb-0"><?php echo $fila['info']; ?></p>
        <p class="text-primary font-weight-bold">$<?php echo $fila['precio']; ?></p>
      </div>
    </div>
  </div>
<?php } ?>
</div>


  <!-- Pie de pagina -->
<?php include('footer.php'); ?>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>