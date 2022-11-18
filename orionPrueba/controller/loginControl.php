<?php 

include("../database/db.php");
        $user = $_POST['user'];
        $pass = $_POST['pass']; 
       
       //$query = "SELECT * FROM `usuarios` WHERE `usuario` LIKE '$user' AND `password` LIKE '$pass'";
       
          $sql= $conn->query("SELECT * FROM `usuarios` WHERE `usuario` LIKE '$user' AND `password` LIKE '$pass'");
       
          if ($datos=$sql->fetch_object()) {
       
           header("Location: ../index.php");
           
          }else{
            echo '<div class="alert alert-danger">El usuario no existe</div>';
   

          }

   





?>