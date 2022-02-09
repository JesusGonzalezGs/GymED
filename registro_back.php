<?php
include("sql/conectar_bd.php");
//creacion de la sesion y variables necesarias
session_start();
$user = $_GET['user'];
$passwd = md5($_GET['passwd']);
$email = $_GET['email'];
$apellido = $_GET['apellido'];

if($user == null){
    //error 1 == usuario vacio
    $_SESSION['error'] = 1;
    header('Location:' . getenv('HTTP_REFERER'));
    die();
}elseif($_GET['passwd'] == null){
    //error 2 == pass vacio
    $_SESSION['error'] = 2;
    header('Location:' . getenv('HTTP_REFERER'));
    die();
}elseif($email == null){
    //error 3 == email vacio
    $_SESSION['error'] = 3;
    header('Location:' . getenv('HTTP_REFERER'));
    die();
}
//falta anyadir la comprobacion de que el email no este en la base ya
//btw el campo email tiene la categoria unique asi que ntr

if($_SESSION["login"] == true){
    //en caso de que un usuario ya logueado intente registrar no funcionara
   header('Location:' . 'index.php');
   die();
}else{
    $sentencia = "insert into usuarios (correo, nombre, apellidos, hash_pwd) values (\"$email\",\"$user\",\"$apellido\",\"$passwd\")";
    $respuesta = mysqli_query($con,$sentencia);
    
    if ($respuesta == 1){
        $_SESSION['login'] = true;
        $_SESSION["nombre"] = $user;
        header('Location:'.'index.php');
        die();
    }else{
        //el error 4 significa problema relacionado con la base de datos
        $_SESSION['error'] = 4;
       header('Location:' . getenv('HTTP_REFERER'));
       die();

    }
}
    ?>