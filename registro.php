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
    <style>
           .registro{
            margin-bottom: 10px; 
            border-radius: 10px; 
            width: 25%;
           }
           .registro:hover{
               background-color: grey;
           }
        </style>  
</head>
<body>
<span>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="src/Logo1.jpg" alt="" height="50" width="50"></a>
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
    <div >
        
        <div style=" background-color: grey;
                height: 20%;
                width: 30%;
                margin-top: 20px;
                margin-left:33%;
                border-radius: 20px;
                text-align:center;" >
                
        <form >
            <p><input style="margin-top: 10px; border-radius: 10px; width: 80%;" type="text" placeholder="Nombre" name= "user"></p>
            <p><input style="margin-top: 10px; border-radius: 10px; width: 80%;" type="text" placeholder="Apellido" name= "apellido"></p>
            <p><input style="margin-top: 10px; border-radius: 10px; width: 80%;" type="email" placeholder="correo electronico" name= "email"></p>
            <p><input style="margin-top: 10px; border-radius: 10px; width: 80%;" type="password" placeholder="Contrasenya" name= "passwd"></p>
            <button class="registro" type="submit" >Registrate</button>
        </form>

    </div>
    </div>

</body>



<!-- Footer -->
<?php footer();?>

</html>