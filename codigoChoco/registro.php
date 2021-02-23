<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<title>Document</title>
</head>
<body style="background-image: url(../datosChoco/images/cards1.jpg);">
<!-- menu de navegacion -->
<?php include('header.php'); ?>

<!-- Formulario -->
<center>
<div class="card col-sm-8 bg-inverse" style="margin-top: 4em; color: white; font-size: 1.5em;">
  <div class="card-body ">
    <form action="php/insertar_registro.php">
    	<div class="form-group  col-sm-6">
        <label for="nombre">Nombre de usuario:</label>
        <input type="text" class="form-control" placeholder="Ingresar nombre" name="nombre_usuario">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" placeholder="Ingresar nombre" name="nombre">
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" placeholder="Ingresar apellido" name="apellido">
      </div>
      <div class="form-group col-sm-6">
        <label for="sexo">Sexo:</label>
        <select class="form-select" aria-label="Default select example">
		  <option selected>Selecciona una opción</option>
		  <option value="1">Masculino</option>
		  <option value="2">Femenino</option>
		  <option value="3">Otro</option>
		</select>
      </div>
      <div class="form-group col-sm-6">
        <label for="email">Dirección de correo:</label>
        <input type="email" class="form-control" placeholder="Ingresar email" name="nombre">
        <label for="pwd">Contraseña:</label>
        <input type="password" class="form-control" placeholder="Ingresar contraseña" name="pwd">
      </div>
      <div class="form-group col-sm-6">
        <label for="telefono">Telefono:</label>
        <input type="tel" class="form-control" placeholder="Ingresar telefono" name="telefono">
      </div>
      <div class="form-group col-sm-6">
        <label for="direccion">Dirección:</label>
        <input type="text" class="form-control" placeholder="Ingresar direccion" name="direccion">
      </div>
      <button type="submit" class="btn btn-primary">Crear cuenta</button>
    </form>
  </div>
</div>
</center>

<!-- Pie de pagina -->
<?php include('footer.php'); ?>

        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>