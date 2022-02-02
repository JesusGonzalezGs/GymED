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
    <meta charset="utf-8">
    <title>Servicios</title>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <link href="carrousel.css" rel="stylesheet" type="text/css">
<script>
var current = 0;
var imagenes = new Array();
 
$(document).ready(function() {
    var numImages = 6;
    if (numImages <= 3) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }
 
    $('.left-arrow').on('click',function() {
        if (current > 0) {
            current = current - 1;
        } else {
            current = numImages - 3;
        }
 
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
 
        return false;
    });
 
    $('.left-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow').on('click', function() {
        if (numImages > current + 3) {
            current = current+1;
        } else {
            current = 0;
        }
 
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
 
        return false;
    }); 
 });
</script>
  </head>
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
      <body>
      <p id="titulo">Ejercítate</p>
      <p id="texto1">Muchotextomuchotexto muchotexto muchotextomuchotextomuchotextomuchotexto muchotextomuchotextomuchotexto muchotextomuchotextomuchotextomuchotextomuchotextomuchotextomuchotextomuchotexto muchotextomuchotextomuchotexto muchotextomuchotextomuchotextomuchotexto muchotextomuchotextomuchotextomuchotexto </p>
    <div id="carrusel">
        <a href="#" class="left-arrow"><img src="imagenes/left-arrow.png" /></a>
        <a href="#" class="right-arrow"><img src="imagenes/right-arrow.png" /></a>
        <div class="carrusel">
            <div class="product" id="product_0">
                <img src="imagenes/bodycombat.jpg" width="195" height="100" />
                <h5>Body-combat</h5>
                
            </div>
            <div class="product" id="product_1">
                <img src="imagenes/prama.jpg" width="195" height="100" />
                <h5>Pramma</h5>
            </div>
            <div class="product" id="product_2">
                <img src="imagenes/spinning_monitor.jpg" width="195" height="100" />
                <h5>Spinning</h5>
            </div>
            <div class="product" id="product_3">
                <img src="imagenes/zumba.jpg" width="195" height="100" />
                <h5>Pilates</h5>
            </div>
            <div class="product" id="product_4">
                <img src="imagenes/Body-Pump.webp" width="195" height="100" />
                <h5>Body-Pump</h5>
            </div>
            <div class="product" id="product_5">
                <img src="imagenes/Piltaes.jpg" width="195" height="100" />
                <h5>Pilates</h5>
            </div>
        </div>
    </div>
    <table class="default" border="1" id="tablita">
        <tr>
            <td>Clase</td>
            <td>Horarios</td>
        </tr>
        <tr>
            <th>Body-combat</th>
            <th>xx:xx</th>
        </tr>
        <tr>
            <th>Pramma</th>
            <th>xx:xx</th>
        </tr>
        <tr>
            <th>Spinning</th>
            <th>xx:xx</th>
        </tr>
        <tr>
            <th>Body-Pump</th>
            <th>xx:xx</th>
        </tr>
        <tr>
            <th>Pilates</th>
            <th>xx:xx</th>
        </tr>
    </table>
  </body>
      
      
</div>
  
<!-- Footer -->

<?php footer();?>
    
</body>
</html>
