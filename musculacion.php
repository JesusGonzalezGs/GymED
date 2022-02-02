<?php
//incluimos las librerias que usaremos
include('libreria_general.php');
include("conectar_bd.php"); 
//creacion de la sesion y variables necesarias
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<?php head();?>
<body>

  <!-- nav -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="src/Logo1.jpg" alt="" height="50" width="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Servicios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="musculacion.php">Musculacion</a>
                  <a class="dropdown-item" href="actividades.php">Actividades</a>
                  <a class="dropdown-item" href="piscinas.php">Piscina</a>
                  <a class="dropdown-item" href="complementos.php">Complementos</a>
                </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contacto.php">Contacto</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="reservas.php">Reservas</a>
            </li>
            
            </ul>
            <ul style = "list-style-type: none; margin: 0; padding: 0;">
            <li class="nav-item dropdown active">
            <?php login_nav(); ?>
          </li>
          </ul>
          
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
          
<!-- nav -->

    <div class="cuerpo">
 <!-- Aqui va lo grueso ya tu sabe-->
      
</div>
  
<!-- Footer -->

<?php footer();?>
    
</body>
</html>