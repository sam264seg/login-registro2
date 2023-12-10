<!DOCTYPE html>
<html>
<head>
    <title>Formulario AIP</title>
 <style>


body {font-family: 'Helvetica Neue', Arial, sans-serif;
    padding: 20px;
    margin: 0;
    overflow: hidden
}
body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url(assets/imagenes/portada.webp);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    filter: blur(5px); /* Ajusta el nivel de desenfoque según prefieras */
    z-index: -1;
}

h1 {
    color: #333;
    text-align: center;
}

form {
    background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco con transparencia */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    margin: 20px auto;
}


form div {
    margin-bottom: 10px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #666;
}

input[type="text"],
input[type="date"],
textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box; /* Asegura que padding no afecte el ancho total */
}

textarea {
    height: 100px;
    resize: vertical; /* Permite al usuario cambiar la altura del textarea */
}

button[type="submit"] {
    background-color: #0056b3;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button[type="submit"]:hover {
    background-color: #004494;
}

    </style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Obtener parámetro 'accion' de la URL
    const params = new URLSearchParams(window.location.search);
    const accion = params.get('accion');

    // Establecer el valor del campo oculto basado en la acción
    let redireccion;
    switch (accion) {
        case 'donacion':
            redireccion = 'donacion.php';
            break;
        case 'voluntario':
            redireccion = 'voluntario.php';
            break;
        case 'proyectos':
            redireccion = 'proyectos.php';
            break;
        case 'eventos':
            redireccion = 'eventos.php';
            break;
        default:
            redireccion = 'donacion.php'; // Valor por defecto
    }
    document.getElementById('paginaRedireccion').value = redireccion;
});
</script>

</head>
<body>
    <h1>Registro de AIP</h1>
    <form id="formularioRegistroAIP" action="procesar_aip.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="nombre">Nombre de la AIP:</label>
            <input type="text" id="nombre" name="nombre" required maxlength="100">
        </div>
        <div>
            <label for="fecha_creacion">Fecha de Creación:</label>
            <input type="date" id="fecha_creacion" name="fecha_creacion" required>
        </div>
        <div>
            <label for="descripcion">Descripción de lo que hará la AIP:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>
        </div>
        <input type="hidden" id="paginaRedireccion" name="paginaRedireccion" value="">
          <button type="submit">Registrar AIP</button>
    </form>
    <script src="assets/js/script2.js"></script>
</body>
</html>

