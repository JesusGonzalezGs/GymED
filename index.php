<?php
//incluimos las librerias que usaremos
include('libreria_general.php');
include("conectar_bd.php"); 
//creacion de la sesion y variables necesarias
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gimnasio ED</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">    
</head>
<body>
<span>
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
                  <a class="dropdown-item" href="#">Musculacion</a>
                  <a class="dropdown-item" href="#">Actividades</a>
                  <a class="dropdown-item" href="#">Piscina</a>
                  <a class="dropdown-item" href="#">Complementos</a>
                </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Contacto</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Reservas</a>
            </li>
            
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
    <div id="derecha"><h1>Bienvenido/a al GymED</h1> <p > Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget arcu vel justo auctor tincidunt. Etiam elementum ipsum a justo fermentum mollis. Aenean tristique finibus nunc, non faucibus nibh placerat sed. Mauris dictum porttitor tincidunt. Duis vitae rutrum sem, tristique commodo nunc. Mauris molestie vel est porta porta. Donec et fermentum sem. Phasellus dapibus at leo eu finibus. Etiam vel sem felis. Vestibulum vulputate lacus facilisis quam condimentum ultrices. Aliquam mollis sit amet neque ac ultrices.

Quisque vulputate commodo ligula ac eleifend. Ut tempus nulla eros, eget blandit purus ornare sollicitudin. In finibus tellus ipsum, vitae tristique purus condimentum id. Phasellus cursus diam non vehicula venenatis. Vestibulum vulputate ut metus eget pellentesque. Proin sit amet diam est. Donec semper justo et nisi congue, nec scelerisque nisi interdum.

Morbi condimentum diam pharetra augue bibendum, at venenatis nibh convallis </p></div>
    <div id="izquierda"> <img aline="left" src="src/img/genteejercitando.jpg" alt="Gente Ejercitando" height="400" width="400"></div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>



<!-- Footer -->
<footer style="background-color: grey;"class="page-footer font-small cyan lighten-5">

  <div   class="container text-center text-md-left mt-5">

    <div  class="row mt-3 dark-grey-text">
 
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <h6 class="text-uppercase font-weight-bold">Enlaces</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">Inicio</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Servicios</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Productos</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Actividades</a>
        </p>

      </div>

      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <h6 class="text-uppercase font-weight-bold">Enlaces</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">Tu perfil</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Registrate!</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Reservas</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Ayuda</a>
        </p>

      </div>
 
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <h6 class="text-uppercase font-weight-bold">Contactanos</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="https://www.google.com/maps/place/IES+Severo+Ochoa+Elche/@38.2799275,-0.7161222,15z/data=!4m2!3m1!1s0x0:0x609104ad972f51c4?sa=X&ved=2ahUKEwii-YGyydH1AhVKPBoKHRlJBlMQ_BJ6BAghEAU"><i class="fas fa-home mr-3"></i> Elche, 03203, España</p></a>
        <p>
          <i class="fas fa-envelope mr-3"></i> contact@gymed.es</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +34 666 999 666</p>

      </div>
    </div>
    <div class="footer-copyright text-center py-3">
      <p>GymEd empresa ficticia, sin registro fiscal</p>
  </div>
  </div>
</footer>

</html>