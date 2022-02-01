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
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
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
    <div class="container-fluid">
      <div class="row">  
    <div class="col-sm-6" id="derecha"><h1>Bienvenido/a al GymED</h1> <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget arcu vel justo auctor tincidunt. Etiam elementum ipsum a justo fermentum mollis. Aenean tristique finibus nunc, non faucibus nibh placerat sed. Mauris dictum porttitor tincidunt. Duis vitae rutrum sem, tristique commodo nunc. Mauris molestie vel est porta porta. Donec et fermentum sem. Phasellus dapibus at leo eu finibus. Etiam vel sem felis. Vestibulum vulputate lacus facilisis quam condimentum ultrices. Aliquam mollis sit amet neque ac ultrices.

Quisque vulputate commodo ligula ac eleifend. Ut tempus nulla eros, eget blandit purus ornare sollicitudin. In finibus tellus ipsum, vitae tristique purus condimentum id. Phasellus cursus diam non vehicula venenatis. Vestibulum vulputate ut metus eget pellentesque. Proin sit amet diam est. Donec semper justo et nisi congue, nec scelerisque nisi interdum.

Morbi condimentum diam pharetra augue bibendum, at venenatis nibh convallis </p></div>
    <div class="col-3" id="izquierda"> <img aline="left" src="src/img/genteejercitando.jpg" alt="Gente Ejercitando" height="400" width="400"></div>
</div>
</body>



<!-- Footer -->
<?php footer();?>

</html>