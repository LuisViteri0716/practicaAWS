<?php
    $conexion = mysqli_connect("localhost", "root", "", "login_bootstrap");
        if($conexion){
            echo "Conectado a la base de datos";
        }else{
            echo "Error de conexión: " . mysqli_connect_error();
        }
?>