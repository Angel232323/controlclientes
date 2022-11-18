<?php

session_start();


$servername= "localhost";
$username= "root";
$password = "";
$dbname = "controlclientes";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
   die("No se pudo conectar");
}



// 
