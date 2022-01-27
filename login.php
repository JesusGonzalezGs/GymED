<?php
//incluimos las librerias que usaremos
include('libreria_general.php');
include("conectar_bd.php"); 
//creacion de la sesion y variables necesarias
session_start();



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