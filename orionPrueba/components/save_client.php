<?php

include("../database/db.php");


if (isset($_POST['save_client'])) {

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $cedula = $_POST['cedula'];
  $telefono = $_POST['Telefono'];
  $direccion = $_POST['direccion'];

  $query = "INSERT INTO `cliente` (`nombre`, `apellido`, `cedula`, `telefono`, `direccion`) VALUES ('$nombre', '$apellido', '$cedula', '$telefono', '$direccion')";

  $result = mysqli_query($conn, $query);

  if (!$result) {
    die("query Fail");
  }

  $_SESSION['message'] = 'Client Saved Succesfully';
  $_SESSION['message_type'] = 'success';


  header("Location: ../index.php");
}
