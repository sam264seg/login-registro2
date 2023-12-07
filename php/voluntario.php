<?php

include 'conexion_be.php';

// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoger los valores del formulario de voluntarios
    $id_voluntario = $_POST['id_voluntario'];
    $nombre = $_POST['nombre']; // Asegúrate de que este campo se envíe desde el formulario
    $direccion = $_POST['direccion'];
    $numero = $_POST['numero'];
    $correo = $_POST['correo'];
    $habilidades = $_POST['habilidades'];

    // Preparar la sentencia SQL para insertar en la tabla Voluntario
    $sql = "INSERT INTO Voluntario (id_voluntario, nombre, direccion, numero, correo, habilidades) VALUES (?, ?, ?, ?, ?, ?)";

    // Preparar la consulta
    $stmt = $conexion->prepare($sql);

    if ($stmt === false) {
        // Manejo de errores al preparar la consulta
        echo "<script>
                alert('Error al preparar la consulta: " . addslashes($conexion->error) . "');
                window.location = '../eventos.php';
              </script>";
        $conexion->close();
        exit();
    }

    // Vincular los parámetros
    $stmt->bind_param("isssss", $id_voluntario, $nombre, $direccion, $numero, $correo, $habilidades);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "<script>
                alert('Voluntario registrado con éxito.');
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
}

?>
