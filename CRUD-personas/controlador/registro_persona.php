<?php

if(!empty($_POST['btnregistrar'])){
    if(!empty($_POST['nombre']) and !empty($_POST['apellido']) and !empty($_POST['dni']) and !empty($_POST['date']) and !empty($_POST['email'])){
        // echo'todo ok';
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $dni=$_POST['dni'];
        $date=$_POST['date'];
        $email=$_POST['email'];
        $sql="INSERT INTO persona (nombre,apellido,dni,fecha_nac,email) VALUES ('$nombre','$apellido','$dni','$date','$email')";
        $resultado=$conexion->query($sql);

        if($resultado){
            // echo '<script type="text/javascript">alert("Registro Exitoso")</script>';
            echo '<div class="alert alert-success">Persona resgistrada correctamente</div>';

        }else{
            // echo '<script type="text/javascript">alert("Error al Registrar")</script>';
            echo '<div class="alert alert-danger">Error al registrar persona</div>';

        }
    }else{
        echo 'alguno de los campos esta vacio';
    }

}