<?php
session_start();
$nombre =$_SESSION["nombre"];
function login(){
    if($_SESSION["login"] != true){
        echo "
         <form  action = \"login_back.php\">
        <p><input id='input_login' type=\"text\" name=\"email\" placeholder='email'></p>
        <p><input id='input_login' type=\"password\" name=\"passwd\" placeholder='password'></p>
        <p>".$_SESSION['problema']."</p>
        <button class='registro' type='submit' >login</button>
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
            <img src="src\user.png" alt="login" height="38" width="38">
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
        <a class="dropdown-item" href="reservas_usuario.php">Mis reservas</a>
        <a class="dropdown-item" href="deslog.php">Cerrar sesion</a>
        </div>
        FAP;
          }
  
}

function footer(){
echo <<< FAP
<div class="footer">

      <div id='foot_left'>
      <ul>
        <li><a href='servicios.php'>Servicios</a></li>
        <li><a href='actividades.php'>Actividades</a></li>
        <li><a href='reservas.php'>Reservas</a></li>
        <li><a href='usuario.php'>Usuario</a></li>
      </ul>
    </div>
     
      <div id='foot_right'>
      <ul >
        <li><a href='pilitica.php'>Politica de privacidad</a></li>
        <li><a href='cookies.php'>Cookies</a></li>
        <li><a href='faq.php'>FAQ</a></li>
        <li><a href='index.php'><img src="src\img\FULL_LOGO.png" alt="" height="40" width="150"></a></li>
      </ul>
    </div>
    <p>GymEd empresa ficticia, sin registro fiscal </p>
  </div>
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