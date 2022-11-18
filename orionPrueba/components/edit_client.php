<?php

include("../database/db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM cliente WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $cedula = $row['cedula'];
        $telefono = $row['telefono'];
        $direccion = $row['direccion'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $query = "UPDATE `cliente` SET  `nombre` = '$nombre', `apellido` = '$apellido', `cedula` = '$cedula', `telefono` = '$telefono', `direccion` = '$direccion' WHERE `cliente`.`id` = $id";

    mysqli_query($conn, $query);
    $_SESSION['message'] = "Client Updated Successfully";
    $_SESSION['message_type'] = "success";

    header("Location: ../index.php ");
}

?>

<?php include("../includes/header.php") ?>

<div class="container p-4">

    <div class="row">
        <div class="col md-4 mx-auto">

            <div class="card card-body">
                <form action="edit_client.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Update Name">

                    </div>

                    <div class="form-group">
                        <input type="text" name="apellido" value="<?php echo $apellido; ?>" class="form-control" placeholder="Update apellido">

                    </div>

                    <div class="form-group">
                        <input type="number" name="cedula" value="<?php echo $cedula; ?>" class="form-control" placeholder="Update cedula">

                    </div>

                    <div class="form-group">
                        <input type="number" name="telefono" value="<?php echo $telefono; ?>" class="form-control" placeholder="Update telefono" class="form-control">

                    </div>

                    <div class="form-group">
                        <input type="text" name="direccion" value="<?php echo $direccion; ?>" class="form-control" placeholder="Update direccion">

                    </div>

                    <button class="btn btn-success" name="update">
                        Update
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>




<?php include("../includes/footer.php") ?>