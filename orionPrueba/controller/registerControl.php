<?php include("../database/db.php");

if(isset($_POST['register_user'])){
      $email = $_POST['email'];
      $name = $_POST['name'];
      $password = $_POST['password'];
      $query ="INSERT INTO `usuarios` (`email`, `usuario`, `password`) VALUES ('$email', '$name', '$password')";
  
      $result = mysqli_query($conn, $query);
     
      if (!$result) {
          die("query Fail");
        }
      
        $_SESSION['message'] = 'User Registred Succesfully';
       $_SESSION['message_type'] = 'success';
  
  
    header("Location: ../login.php");
  


    }




?>