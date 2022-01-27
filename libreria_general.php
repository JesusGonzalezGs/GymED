<?php
session_start();

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
?>