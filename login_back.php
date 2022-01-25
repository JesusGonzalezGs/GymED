<?php
include("conectar_bd.php");

//pillamos el usuario y la contraseña introducidos
$user = $_GET['user'];
$passwd = $_GET['passwd'];
//pasamos la contraseña por el md5  para comparar despues
$passwd = md5($passwd);

//sentencia sql
$sentencia = "SELECT hash_pwd FROM usuarios where nombre = \"$user\"";
$respuesta = mysqli_query($con,$sentencia);

echo $respuesta;
?>