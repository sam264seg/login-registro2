<?php

session_start();
include 'php/conexion_be.php';

$response = array('success' => false);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha_creacion = $_POST['fecha_creacion'] ?? null;
    $nombre = $_POST['nombre'] ?? null;
    $descripcion = $_POST['descripcion'] ?? null;

    // Debugging: Imprime los datos recibidos
    error_log("Fecha: $fecha_creacion, Nombre: $nombre, Descripción: $descripcion");

    if ($fecha_creacion && $nombre && $descripcion) {
        $stmt = $conexion->prepare("INSERT INTO aip (fecha_creacion, nombre, descripcion) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $fecha_creacion, $nombre, $descripcion);
        

    if ($stmt->execute()) {
        $response['success'] = true;
    } else {
        $response['error'] = 'Error al insertar en la base de datos: ' . $stmt->error;
    }
    }}
    $stmt->close();

    echo json_encode($response);

    
/*session_start();
include 'php/conexion_be.php';

$response = array('success' => false); // Cambia aquí a $response

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha_creacion = $_POST['fecha_creacion'] ?? null;
    $nombre = $_POST['nombre'] ?? null;
    $descripcion = $_POST['descripcion'] ?? null;

    if ($fecha_creacion && $nombre && $descripcion) {
        $stmt = $conexion->prepare("INSERT INTO aip (fecha_creacion, nombre, descripcion) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $fecha_creacion, $nombre, $descripcion);
        
        if ($stmt->execute()) {
            $response['success'] = true;
        } else {
            $response['error'] = 'Error al insertar en la base de datos: ' . $stmt->error;
        }
     $stmt->close();
    } else {
        $response['error'] = 'Todos los campos son obligatorios.';
    }
}
echo json_encode($response);*/
?>




