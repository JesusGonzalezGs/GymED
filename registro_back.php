<?php
include("sql/conectar_bd.php");
//creacion de la sesion y variables necesarias
session_start();
$user = $_GET['user'];
$passwd = md5($_GET['passwd']);
$email = $_GET['email'];
$apellido = $_GET['apellido'];

if($_SESSION["login"] == true){
    echo "usuario ya logueado";
}else{
    $sentencia = "insert into usuarios (correo, nombre, apellidos, hash_pwd) values (\"$email\",\"$user\",\"$apellido\",\"$passwd\")";
    echo $sentencia;
}

    ?>