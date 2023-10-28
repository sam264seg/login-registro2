<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro -</title>
    <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

    <main>

        <div class="contenedor_todo">

            <div class="caja_trasera">

                <div class="caja_trasera-login">
                    <h3>¿ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn_iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja_trasera-register">
                    <h3>¿aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn_registrarse">Regístrarse</button>
                </div>
            </div>
            <!--Formulario de Login y Registro-->
            <div class="contenedor_login-register">

                <!--Formulario de Login-->
                <form action="" class="formulario_login">
                    <h2> Inicia sesion</h2>
                    <input type="text" placeholder="email">
                    <input type="password" placeholder="Contraseña">
                    <button> Entrar</button>
                </form>

                <!--Formulario de Registro-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario_register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="email" name= "email">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>

</html>