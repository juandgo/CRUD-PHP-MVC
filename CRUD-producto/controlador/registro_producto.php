<?php

if(!empty($_POST['btnregistrar'])){
    if(!empty($_POST['name']) and !empty($_POST['price']) and !empty($_POST['amount']) and !empty($_POST['description'])){
        // echo'todo ok';
        $name=$_POST['name'];
        $price=$_POST['price'];
        $amount=$_POST['amount'];
        $description=$_POST['description'];
        $sql="INSERT INTO producto (nombre,precio,cantidad,descripcion) VALUES ('$name','$price','$amount','$description')";
        $resultado=$conexion->query($sql);

        if($resultado){
            // echo '<script type="text/javascript">alert("Registro Exitoso")</script>';
            echo '<div class="alert alert-success">Producto resgistrada correctamente</div>';

        }else{
            // echo '<script type="text/javascript">alert("Error al Registrar")</script>';
            echo '<div class="alert alert-danger">Error al registrar producto</div>';

        }
    }else{
        echo 'alguno de los campos esta vacio';
    }

}