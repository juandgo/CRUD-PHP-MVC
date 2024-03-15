<?php
include 'modelo/conexion.php';

$id = $_GET["id"];
// echo $id;

$sql = $conexion->query("SELECT * FROM producto WHERE id_producto = '$id'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <form class="col-4 p-3 m-auto" method="post">
        <h5 class="text-center alert alert-secondary">Modificar producto</h5>
        <?php while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="txt" class="form-control" id="name" name="name" value="<?= $datos->$nombre ?>">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="txt" class="form-control" id="price" name="price" value="<?= $datos->$apellido ?>">
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Cantidad</label>
                <input type="txt" class="form-control" id="amount" name="amount">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
        <?php } ?>

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Submit</button>
    </form>
</body>

</html>