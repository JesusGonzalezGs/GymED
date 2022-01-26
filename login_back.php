<?php
include("sql/conectar_bd.php");

//pillamos el usuario y la contraseña introducidos
$user = $_GET['user'];
$passwd = $_GET['passwd'];
//pasamos la contraseña por el md5  para comparar despues
$passwd = md5($passwd);

/*comprobacion de conexcion descomentar en caso de error
if ($con->connect_errno) {
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}else{
    echo "conexion ok";
}*/
//sentencia y realizacion de conexion;
$sentencia = "SELECT hash_pwd FROM usuarios where nombre = \"$user\"";
$respuesta = mysqli_query($con,$sentencia);

while ( $rows = $respuesta->fetch_assoc() ) {
    $hash= $rows[hash_pwd];
}
if ($passwd == $hash){
    echo "logueado correctamente";
}
/* comprobar la conexión */

?>