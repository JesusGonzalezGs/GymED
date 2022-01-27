<?php
//incluimos las librerias que usaremos
include('libreria_general.php');
//creacion de la sesion y variables necesarias
session_start();
$login = $_SESSION["login"];
$nombre = $_SESSION["nombre"];
$_SESSION['last_url'] = "localhost".$_SERVER['REQUEST_URI'];
//conexion con la base de datos
include("conectar_bd.php"); 

?>

<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php  login();?>
      </body>
</html>