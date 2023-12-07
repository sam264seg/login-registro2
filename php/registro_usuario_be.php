<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];


<<<<<<< HEAD
$query = "INSERT INTO usuarios(nombre_completo,email,usuario,contrasena) 
=======
<<<<<<< HEAD
$query = "INSERT INTO usuarios(nombre_completo,email,usuario,contrasena) 
=======
$query = "INSERT INTO usuarios(nombre_completo,email,usuario, contrasena) 
>>>>>>> d6d333c3d059e50f084fc91caa5b9e6cc0b58743
>>>>>>> e6e0b5ad315fcc9ec424b8e8ec128fa5c6649797
         VALUES('$nombre_completo','$email','$usuario','$contrasena')";

//verificacion de correo repetido en base de datos
$verificador_email = mysqli_query($conexion, " SELECT * FROM usuarios WHERE email='$email'");

if (mysqli_num_rows($verificador_email) > 0) {
    echo '
    <script>
    alert("Este correo ya esta registrado, intente con otro diferente, porfavor");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

//verificacion de nombre de usuario para que no se repetido en base de datos
$verificar_usuario = mysqli_query($conexion, " SELECT * FROM usuarios WHERE usuario='$usuario'");

if (mysqli_num_rows($verificar_usuario) > 0) {
    echo '
    <script>
    alert("Este usuario ya esta registrado, intente con otro diferente, porfavor");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
<script>
alert("usuario alamacenado exitosamente");
window.location = "../index.php";
</script>
';
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e6e0b5ad315fcc9ec424b8e8ec128fa5c6649797
}
else {
    echo '
<script>
alert("Intentalo nuevamente usuario no alamacenado. Error: '.mysqli_error($conexion).'");
<<<<<<< HEAD
=======
=======
} else {
    echo '
<script>
alert("Intentalo nuevamente usuario no alamacenado");
>>>>>>> d6d333c3d059e50f084fc91caa5b9e6cc0b58743
>>>>>>> e6e0b5ad315fcc9ec424b8e8ec128fa5c6649797
window.location = "../index.php";
</script>
';
}
<<<<<<< HEAD


=======
<<<<<<< HEAD


=======
>>>>>>> d6d333c3d059e50f084fc91caa5b9e6cc0b58743
>>>>>>> e6e0b5ad315fcc9ec424b8e8ec128fa5c6649797
mysqli_close($conexion);
?>