<?php

include 'conexion_be.php';

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoger los valores del formulario
    $nombreProyecto = $_POST['nombre'];
    $descripcionProyecto = $_POST['descripcion'];
    $agenciaFinanciacion = $_POST['agencia_financiacion'];

    // La ID de recaudación de fondos no se incluye aquí, se asume que se maneja de otra forma

    // Preparar la sentencia SQL para insertar en la tabla proyecto_investigacion
    $sql = "INSERT INTO proyecto_investigacion (nombre, descripcion, agencia_financiacion) VALUES (?, ?, ?)";

    // Preparar la consulta
    $stmt = $conexion->prepare($sql);

    if ($stmt === false) {
        echo "<script>alert('Error al preparar la consulta: " . addslashes($conexion->error) . "'); window.location = '../proyectos.php';</script>";
        $conexion->close();
        exit();
    }

    // Vincular los parámetros
    $stmt->bind_param("sss", $nombreProyecto, $descripcionProyecto, $agenciaFinanciacion);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "<script>alert('Proyecto de investigación registrado con éxito.'); window.location = '../proyectos.php';</script>";
    } else {
        echo "<script>alert('Error al registrar el proyecto de investigación. Error: " . addslashes($stmt->error) . "'); window.location = '../proyectos.php';</script>";
    }

    // Cerrar la consulta y la conexión
    $stmt->close();
    $conexion->close();
}

?>
