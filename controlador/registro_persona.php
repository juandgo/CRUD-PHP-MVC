<?php

if(!empty($_POST['btnregistrar'])){
    if(!empty($_POST['nombre']) and !empty($_POST['apellido']) and !empty($_POST['dni']) and !empty($_POST['date']) and !empty($_POST['email'])){
        echo'todo ok';
    }else{
        echo 'alguno de los campos esta vacio';
    }

}