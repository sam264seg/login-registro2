<?php
include 'conexion_be.php';

// Recoger los valores del formulario
$fecha_inicio = $_POST['fecha_inicio']; // Asegúrate de que este campo exista en tu formulario
$fecha_finalizacion = $_POST['fecha_finalizacion']; // Asegúrate de que este campo exista en tu formulario
$id_membresia = $_POST['id_membresia']; // Asegúrate de que este campo exista en tu formulario

// Preparar la sentencia SQL para insertar
$sql = "INSERT INTO Inicio_fin_voluntariado (fecha_inicio, fecha_finalizacion, id_membresia) VALUES (?, ?, ?)";

// Preparar la consulta
$stmt = $conexion->prepare($sql);

// Vincular los parámetros
$stmt->bind_param("ssi", $fecha_inicio, $fecha_finalizacion, $id_membresia);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "<script>
            alert('Voluntariado registrado con éxito.');
            window.location = '../pagina_destino.php'; // Cambia a tu página de destino
          </script>";
} else {
    echo "<script>
            alert('Inténtalo nuevamente. Error: " . addslashes($stmt->error) . "');
            window.location = '../pagina_destino.php'; // Cambia a tu página de destino
          </script>";
}

// Cerrar la consulta y la conexión
$stmt->close();
$conexion->close();
?>

