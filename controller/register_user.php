<?php

include "../conexionBD/conexion.php";

$nombre_usuario = $_POST['nombre_usuario'];
$correo = $_POST['correo'];     
$contrasena = $_POST['contrasena']; 

$query = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$nombre_usuario', '$correo', '$contrasena')";

$ejecutar = mysqli_query($conexion, $query);
if ($ejecutar){
    echo "<script>alert('Usuario registrado exitosamente');</script>";
    echo "<script>window.location.href = '../index.php';</script>";
}else{
    echo "<script>alert('Error al registrar el usuario');</script>";
    echo "<script>window.location.href = '../index.php';</script>";
}

mysqli_close($conexion);
?>