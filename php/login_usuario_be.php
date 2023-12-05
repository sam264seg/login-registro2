<?php
session_start();

include 'conexion_be.php';

$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
//encriptacion de contraseña
//$contrasena= hash('sha512',$contrasena);

$validar_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE email='$email' and contrasena= '$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario']= $email;
    header("location: ../principal2.php ");
    exit;
}
else{
    echo '
    <script>
    alert("Usuario no encontrado; por favor verifique los datos introducidos")
    window.location = "../principal.php";
    </script>';
    exit;
}
?>