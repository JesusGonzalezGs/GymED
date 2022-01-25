<?php
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
    
    <legend>Introduce los datos de tu usuario:</legend>
        
        <legend>Información de usuario:</legend>
        <form action = "login_back.php"> 
        <p>Nombre:<input type="text" name="user"></p>
        <p>Contraseña:<input type="password" name="passwd"></p>
        <input type="submit" value="login">
    </form>
      </body>
</html>