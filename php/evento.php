<?php

include 'conexion_be.php';

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoger los valores del formulario de patrocinadores
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $numero_telefono = $_POST['numero_telefono'] ?? ''; // Asumimos que este campo es opcional
    // id_categoria_aip no se incluye aquí, se asume que se maneja de otra forma

    // Preparar la sentencia SQL para insertar en la tabla Patrocinador
    $sql = "INSERT INTO Patrocinador (correo, numero_telefono, nombre) VALUES (?, ?, ?)";

    // Preparar la consulta
    $stmt = $conexion->prepare($sql);

    if ($stmt === false) {
        echo "<script>alert('Error al preparar la consulta: " . addslashes($conexion->error) . "'); window.location = '../eventos.php';</script>";
        $conexion->close();
        exit();
    }

    // Vincular los parámetros
    $stmt->bind_param("sss", $correo, $numero_telefono, $nombre);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "<script>alert('Patrocinador registrado con éxito.'); window.location = '../eventos.php';</script>";
    } else {
        echo "<script>alert('Error al registrar el patrocinador. Error: " . addslashes($stmt->error) . "'); window.location = '../eventos.php';</script>";
    }

    // Cerrar la consulta y la conexión
    $stmt->close();
    $conexion->close();
}

?>


