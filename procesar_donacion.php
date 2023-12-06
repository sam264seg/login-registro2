<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["email"];
    $telefono = $_POST["numero_telefono"];
    $cantidad = $_POST["cantidad"];
    $fecha_donacion = $_POST["fecha_donacion"];

    // Crear la conexión a la base de datos
    $conexion = new mysqli("nombre_del_servidor", "usuario", "contraseña", "nombre_de_la_base_de_datos");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Crear la consulta de inserción
    $consulta = "INSERT INTO tabla_donaciones (nombre, correo, numero_telefono, cantidad, fecha_donacion) VALUES ('$nombre', '$correo', '$telefono', '$cantidad', '$fecha_donacion')";

    // Ejecutar la consulta
    if ($conexion->query($consulta) === TRUE) {
        echo "Donación registrada correctamente";
    } else {
        echo "Error al registrar la donación: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    echo "Acceso no permitido";
}
?>