<?php  
DEFINE("DB_HOST", "localhost");  
DEFINE("DB_USER", "gymed");  
DEFINE("DB_PASSWORD", "gymed");  
DEFINE("DB_NAME", "GYMED");  
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);  
if (!$con || !mysqli_select_db($con,DB_NAME)) {    
die("Error conectando a la BD: " . mysqli_error($con));   
} 
?>