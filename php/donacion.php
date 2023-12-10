<?php
include 'conexion_be.php';

// Recoger los valores del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$numero_telefono = $_POST['numero_telefono'];
$cantidad = $_POST['cantidad'];
$fecha_donacion = $_POST['fecha_donacion']; // Asegúrate de que este campo exista en tu formulario

// Primero, insertar en la tabla asociada (por ejemplo, Donante)
$sqlDonante = "INSERT INTO Donante (nombre, correo, numero_telefono, cantidad) VALUES (?, ?, ?, ?)";
$stmtDonante = $conexion->prepare($sqlDonante);
$stmtDonante->bind_param("ssss", $nombre, $correo, $numero_telefono, $cantidad);

if ($stmtDonante->execute()) {
    // Insertar en la tabla fecha_donacion
    $sqlFechaDonacion = "INSERT INTO fecha_donacion (fecha) VALUES (?)";
    $stmtFechaDonacion = $conexion->prepare($sqlFechaDonacion);
    $stmtFechaDonacion->bind_param("s", $fecha_donacion);

    if ($stmtFechaDonacion->execute()) {
        echo "<script>
                alert('Donación registrada con éxito.');
                window.location = '../donacion.php';
              </script>";
    } else {
        echo "<script>
                alert('Error al registrar la fecha de donación.');
                window.history.back();
              </script>";
    }

    $stmtFechaDonacion->close();
} else {
    echo "<script>
            alert('Error al registrar la donación.');
            window.history.back();
          </script>";
}

$stmtDonante->close();
$conexion->close();

?>


