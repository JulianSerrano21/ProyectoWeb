<?php 
  $formAction = "/chocolicioso/codigoChoco/php/check_usuario.php";
?>

<div class="modal fade" id="cuenta">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Ingresa a tu cuenta</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST" action= "<?php echo $formAction ?>">
          <div class="form-group">
            <label for="email">Dirección de correo:</label>
            <input type="email" class="form-control" placeholder="Ingresar correo" name="correo">
          </div>
          <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <input type="password" class="form-control" placeholder="Ingresar contraseña" name="pwd">
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Recuerdame
            </label>
          </div>
          <button name="submit" type="submit" class="btn btn-primary">Ingresar</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer justify-content-center">
        <p>¿No tienes cuenta?</p>
        <a href="registro.php"><button type="button" class="btn btn-info">Registrate</button></a>

      </div>

    </div>
  </div>
</div>