<?php
session_start();
$nombre =$_SESSION["nombre"];
function login(){
    if($_SESSION["login"] != true){
        echo "
        <form action = \"login_back.php\"> 
        <p>Nombre:<input type=\"text\" name=\"user\"></p>
        <p>Contraseña:<input type=\"password\" name=\"passwd\">
        ".$_SESSION['problema']."</p>
        <input type=\"submit\" value=\"login\">
    </form>
    <p style='font-size: 15px;'>No tienes cuenta? <a  href='registro.php'>Registrate!</a></p>
    ";
  }else{
    $nombre = $_SESSION["nombre"];
      echo "<p>bienvenido $nombre</p>";
      echo "<a href='deslog.php'> cerrar sesion</a>";
  }
}
  function login_nav(){
            $nombre =$_SESSION["nombre"];
       if($_SESSION["login"] != true){
        echo <<< FAP
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="src/user.png" alt="login" height="38" width="38">
          </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        FAP;
        login();
        echo "</div>";
        
          }else{
            echo <<< FAP
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="src/user.png" alt="login" height="38" width="38">$nombre
          </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="usuario.php">Mi perfil</a>
        <a class="dropdown-item" href="#">Mis reservas</a>
        <a class="dropdown-item" href="deslog.php">Cerrar sesion</a>
        </div>
        FAP;
          }
  
}

function footer(){
echo <<< FAP
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

FAP;
  
}

function error_reg(){
  switch ($_SESSION['error']){
    case 1:
      echo "el usuario no puede estar vacio";
      break;
    case 2:
      echo "el password no puede estar vacio";
      break;      
    case 3:
      echo "el email no puede estar vacio";
      break;
    case 5:
      echo "este email ya esta en uso";
      break;
    case 4:
      echo "error relacionado con la base de datos";
      break;      
    }
}
?>