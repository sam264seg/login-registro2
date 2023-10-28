<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(nombre_completo,email,usuario, contrasena) 
         VALUES('$nombre_completo','$email','$usuario','$contrasena')";

$ejecutar = mysqli_query ($conexion,$query);

?>