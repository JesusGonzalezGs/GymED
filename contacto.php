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

 <div class="container-fluid">
   <div class="row">
    <div style="margin-left: 30px; margin-right: 100px;" class="col">
      <br>
      <h1><u>Contacta con nosotros</u></h1>
      <br>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias in tempore ad porro exercitationem facilis alias quo fuga labore voluptatum suscipit, voluptates impedit earum odit rerum eius perspiciatis! Magni, dolores.</p>
      <br>
      <br>
      <img src="src/ginete-ejercitandose.jpg" alt="foto">
    </div>

    <div class="col-3 bg-secondary text-white" >
      <br>
      <br>
      <h2 class="text-center"> <u>Información de contacto</u></h2>
      <br>
      <h3 style="margin-left: 46px">Dirección</h3>
      <br>
      <p style="margin-left: 46px">C/ Pepe Gandia Zizz 69 B</p>
      <br>
      <h3 style="margin-left: 46px">Horarios</h3>
      <br>
      <p style="margin-left: 46px">Lunes - Sábado = 7:00 - 23:00</p>
      <p style="margin-left: 46px">Domingo = 7:00 - 14:00</p>
      <br>
      <br>
      <br>
      <br>
    </div>
   </div>
  </div>
 <div class="bg-secondary text-white">
     <div class="row">
        <div class="col-1">
          <img src="src/telefono.jpg" alt="telefono" width="150px" height="100px">
        </div>
        <div class="col-2" style="margin-top: 15px">
          <br>
          <p>&nbsp;&nbsp;TLF= 611 41 33 51</p>
        </div>
     </div>
 </div>
 
</div>
  
<!-- Footer -->

<?php footer();?>
    
</body>
</html>