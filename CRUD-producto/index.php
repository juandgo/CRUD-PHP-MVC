<?php
// include 'modelo/conexion.php';

// $id=$_GET['id'];
// $sql=$conexion->query("SELECT * FROM producto WHERE id_producto=$id");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CRUD EN PHP Y MYSQL</title>
</head>

<body>
    <H1 class="text-center p-3">CRUD EN PHP Y MYSQL | BOOTSTRAP</H1>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="post">
            <h3 class="text-center alert alert-secondary">Registro de producto</h3>
            <?php
            include 'modelo/conexion.php';
            include 'controlador/registro_producto.php';
            ?>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="txt" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="txt" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Cantidad</label>
                <input type="txt" class="form-control" id="amount" name="amount">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Submit</button>
        </form>
        <div class="col-8 p-4">
            <div class="table-responsive">
                <table class="table ">
                    <thead class="bg-info">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'modelo/conexion.php';
                        $sql = $conexion->query("SELECT * FROM producto");
                        while ($datos = $sql->fetch_object()) { ?>
                            <tr class="">
                                <td><?= $datos->id_producto ?></td>
                                <td><?= $datos->nombre ?></td>
                                <td><?= $datos->precio ?></td>
                                <td><?= $datos->cantidad ?></td>
                                <td><?= $datos->descripcion ?></td>
                                <td><a href="modificar_producto.php?id=<?= $datos->id_producto ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>