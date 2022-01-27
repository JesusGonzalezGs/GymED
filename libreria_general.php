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
        Inicia sesion
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        FAP;
        login();
        echo "</div>";
        
          }else{
            echo <<< FAP
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        $nombre
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="deslog.php">Cerrar sesion</a>
        </div>
        FAP;
          }
  
}
?>