<?php

include 'conexion_be.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoger los valores del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $numero_telefono = $_POST['numero_telefono']; // Asumiendo que este campo está en la base de datos

    // Preparar la sentencia SQL para insertar en la tabla Patrocinador
    $sql = "INSERT INTO Patrocinador (correo, numero_telefono, nombre) VALUES (?, ?, ?)";

    // Preparar la consulta
    if ($stmt = $conexion->prepare($sql)) {
        // Vincular los parámetros
        $stmt->bind_param("sss", $correo, $numero_telefono, $nombre);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "<script>
                    alert('Patrocinador registrado con éxito.');
                    window.location = '../index.php'; // Ajusta esta ruta a la página de inicio o a donde desees redirigir.
                  </script>";
        } else {
            echo "<script>
                    alert('Error al registrar el patrocinador. Error: " . htmlspecialchars($stmt->error) . "');
                    window.location = '../index.php'; // Ajusta esta ruta como sea necesario.
                  </script>";
        }

        // Cerrar la consulta
        $stmt->close();
    } else {
        echo "<script>
                alert('Error al preparar la consulta. Error: " . htmlspecialchars($conexion->error) . "');
                window.location = '../index.php'; // Asegúrate de que esta ruta sea correcta.
              </script>";
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    header('Location: ../index.php'); // Si el método no es POST, redirigir al index.
    exit();
}
?>

