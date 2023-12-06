<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion_be.php';

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['correo'] ?? '';
    $numero_telefono = $_POST['numero_telefono'] ?? '';
    $cantidad = $_POST['cantidad'] ?? '';
    $fecha_donacion = $_POST['fecha_donacion'] ?? '';

    // Validar y sanear los datos aquí (importante para la seguridad)

    // Preparar la consulta SQL para insertar los datos en la base de datos
    $query = "INSERT INTO donaciones (nombre, email, numero_telefono, cantidad, fecha_donacion) VALUES (?, ?, ?, ?, ?)";

    // Preparar la sentencia
    if ($stmt = $conexion->prepare($query)) {
        // Vincular los parámetros a la sentencia preparada
        $stmt->bind_param('sssss', $nombre, $email, $numero_telefono, $cantidad, $fecha_donacion);

        // Ejecutar la sentencia
        if ($stmt->execute()) {
            // Si todo sale bien, mostrar una confirmación y la factura
            echo "Donación registrada con éxito. <br>";
            echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
            echo "Correo: " . htmlspecialchars($email) . "<br>";
            echo "Número de Teléfono: " . htmlspecialchars($numero_telefono) . "<br>";
            echo "Cantidad: $" . htmlspecialchars($cantidad) . "<br>";
            echo "Fecha de Donación: " . htmlspecialchars($fecha_donacion) . "<br>";
            // Puedes añadir aquí el código HTML para estilizar la factura si deseas
        } else {
            echo "Error al registrar la donación: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error al preparar la consulta: " . $conexion->error;
    }

    $conexion->close();
} else {
    echo "Acceso no autorizado.";
}
?>


