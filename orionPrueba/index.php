<?php include("database/db.php") ?>
<?php include("includes/header.php") ?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4">

            <?php if (isset($_SESSION['message'])) { ?>

                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            <?php session_unset();
            } ?>

            <div class="card card-body">

                <form action="components/save_client.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder=" Nombre" autofocus>
                    </div>

                    <div class="form-group">
                        <input type="text" name="apellido" class="form-control" placeholder=" Apellido">
                    </div>

                    <div class="form-group">
                        <input type="number" name="cedula" class="form-control" placeholder=" Cedula">
                    </div>
                    <div class="form-group">
                        <input type="number" name="Telefono" class="form-control" placeholder=" Telefono">
                    </div>

                    <div class="form-group">
                        <input type="text" name="direccion" class="form-control" placeholder="Direccion">
                    </div>

                    <input type="submit" class="btn btn-success btn-block" name="save_client" value="Guardar Cliente">

                </form>

            </div>

        </div>

        <div class="col-md-8">

            <table class="table table-bordered">

                <thead>
                    <tr>

                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Actions</th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM cliente";
                    $result_clients = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result_clients)) { ?>
                        <tr>

                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['apellido'] ?></td>
                            <td><?php echo $row['cedula'] ?></td>
                            <td><?php echo $row['telefono'] ?></td>
                            <td><?php echo $row['direccion'] ?></td>
                            <td>
                                <a href="components/edit_client.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <a href="components/delete_client.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                    <i class="fa-solid fa-trash "></i>

                                </a>
                            </td>
                        </tr>


                    <?php } ?>

                </tbody>


            </table>


        </div>


    </div>


</div>








<?php include("includes/footer.php") ?>