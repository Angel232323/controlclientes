<?php


include("../database/db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM `cliente` WHERE `cliente`.`id` = $id";
    $result = mysqli_query($conn,$query);

    if(!$result){

        die("Query Failed");
    }

    $_SESSION['message']= "Client Removed Sucessfully";
    $_SESSION['message_type']= 'danger';

    header('Location: ../index.php');
    
}
