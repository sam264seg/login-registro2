<?php

include 'conexion_be.php';

// Recoger los valores del formulario
$id_evento = $_POST['id_evento'];
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$ubicacion = $_POST['ubicacion'];
$descripcion = $_POST['descripcion'];

// Preparar la sentencia SQL para insertar
$sql = "INSERT INTO evento(id_evento, nombre, fecha, hora, ubicacion, descripcion) VALUES (?, ?, ?, ?, ?, ?)";

// Preparar la consulta
$stmt = $conexion->prepare($sql);

// Vincular los parámetros
$stmt->bind_param("ssssss", $id_evento, $nombre, $fecha, $hora, $ubicacion, $descripcion);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "<script>
            alert('Evento registrado con éxito.');
            window.location = '../eventos.php';
          </script>";
} else {
    echo "<script>
            alert('Inténtalo nuevamente. Error: " . addslashes($stmt->error) . "');
            window.location = '../eventos.php';
          </script>";
}

// Cerrar la consulta y la conexión
$stmt->close();
$conexion->close();




?>

