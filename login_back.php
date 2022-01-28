<?php
include("sql/conectar_bd.php");
//creacion de la sesion y variables necesarias
session_start();

//pillamos el usuario y la contraseña introducidos
$email = $_GET['email'];
$passwd = $_GET['passwd'];
//pasamos la contraseña por el md5  para comparar despues
$passwd = md5($passwd);

//comprobacion de conexcion descomentar en caso de error
/*
if ($con->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}else{
    echo "conexion ok";
}*/
//sentencia y realizacion de conexion;
$sentencia = "SELECT hash_pwd,nombre FROM usuarios where correo = \"$email\"";
$respuesta = mysqli_query($con,$sentencia);
while ( $rows = $respuesta->fetch_assoc() ) {
    $hash= $rows[hash_pwd];
    $user=$rows[nombre];
}
//compruebo que los hases son los mismos 
if ($passwd == $hash){
    echo "logueado correctamente";
    $_SESSION["login"] = true;
    $_SESSION["nombre"] = $user;
}else {
    echo "login no correcto";
    $_SESSION['problema'] = "usuario o contrasenya invalidos";

}
header('Location:' . getenv('HTTP_REFERER'));



?>