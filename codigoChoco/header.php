<!-- Sección de barra de navegación -->
<nav class="navbar navbar-inverse bg-inverse navbar-toggleable-sm fixed-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/chocolicioso/index.php">
    <img src=" /chocolicioso/datosChoco/images/logo.png" width="40" height="40" class="d-inline-block align-top" alt="Logo Chocolicioso">
    <caption>Chocolicioso</caption>

  </a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <div class="navbar-nav mr-auto ml-auto text-center">
      <a class="nav-item nav-link active" href="/chocolicioso/index.php">Inicio</a>
      <a class="nav-item nav-link" href="/chocolicioso/codigoChoco/nosotros.php">Nosotros</a>
      <div class="dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="DropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <a class="dropdown-item" href="/chocolicioso/codigoChoco/productos1.php">Principales</a>
          <a class="dropdown-item" href="/chocolicioso/codigoChoco/productos2.php">Fechas especiales</a>
          <a class="dropdown-item" href="/chocolicioso/codigoChoco/productos3.php">Deluxe</a>
        </div>
      </div>
      <?php
      session_start();
      if (isset($_SESSION["userID"])) {
        echo '<span class="nav-item nav-link">' . $_SESSION["nombreCompleto"] . '</span> ';

        echo '<a class="nav-item nav-link" href="/chocolicioso/codigoChoco/includes/cerrar_sesion.php">Cerrar sesión</a>';
      } else {
        echo '<a class="nav-item nav-link" href="" data-toggle="modal" data-target="#cuenta">Cuenta
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
          <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
          <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
        </svg>
      </a>';
      }
      ?>
    </div>

    <div class="d-flex flex-row justify-content-center">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar producto" aria-label="Search">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Buscar
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
          </svg>
        </button>
      </form>
    </div>
  </div>
</nav>
<!-- The Modal -->
<?php
include_once "includes/login.inc.php";
?>