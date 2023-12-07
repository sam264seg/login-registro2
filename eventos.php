<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Eventos</title>
    <link rel="stylesheet" href="assets/css/eventos.css">
    <!-- Enlace a CSS de Bootstrap para estilos de form-group y demás clases -->
    <link rel="stylesheet" href="path_to_bootstrap.css">
</head>
<body>

<div class="container">
<!-- Formulario para Registrar un Evento -->
<form action="php/evento.php" method="POST" class="formulario_Registro_Eventos">
    <h2>Registro de Eventos</h2>
    <input type="hidden" name="form_type" value="registro_evento">
    <div class="form-group">
        <label for="id_evento">ID del Evento:</label>
        <input type="text" class="form-control" id="id_evento" name="id_evento" placeholder="id_evento">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre">
    </div>
    <div class="form-group">
        <label for="fecha">Fecha del Evento:</label>
        <input type="date" class="form-control" id="fecha" name="fecha">
    </div>
    <div class="form-group">
        <label for="hora">Hora del Evento:</label>
        <input type="time" class="form-control" id="hora" name="hora">
    </div>
    <div class="form-group">
        <label for="ubicacion">Ubicación:</label>
        <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="ubicacion">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Registrar Evento</button>
</form>



    <!-- Formulario para Registro de Voluntarios -->
    <form action="php/voluntario.php" method="POST" class="formulario_Registro_voluntario">
    <input type="hidden" name="form_type" value="registro_voluntario">
    <h2>Registro de Voluntarios</h2>
    <div class="form-group">
        <label for="id_voluntario">ID del voluntario:</label>
        <input type="text" class="form-control" id="id_voluntario" name="id_voluntario" placeholder="ID del voluntario">
    </div>
    <div class="form-group">
        <label for="nombre_voluntario">Nombre:</label>
        <input type="text" class="form-control" id="nombre_voluntario" name="nombre" placeholder="Nombre del voluntario">
    </div>
    <div class="form-group">
        <label for="direccion_voluntario">Dirección:</label>
        <input type="text" class="form-control" id="direccion_voluntario" name="direccion" placeholder="Dirección del voluntario">
    </div>
    <div class="form-group">
        <label for="numero_voluntario">Número:</label>
        <input type="text" class="form-control" id="numero_voluntario" name="numero" placeholder="Número de contacto">
    </div>
    <div class="form-group">
        <label for="correo_voluntario">Correo:</label>
        <input type="email" class="form-control" id="correo_voluntario" name="correo" placeholder="Correo electrónico">
    </div>
    <div class="form-group">
        <label for="habilidades_voluntario">Habilidades:</label>
        <textarea class="form-control" id="habilidades_voluntario" name="habilidades" rows="3" placeholder="Describa sus habilidades"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Registrarse como voluntario</button>
</form>


  <!-- Formulario para Registro de Patrocinadores -->
<form action="php/patrocinador.php" method="POST" class="formulario_Registro_Patrocinador">
    <h2>Registro de Patrocinadores</h2>
    <div class="form-group">
        <label for="nombre">Nombre de la Compañía:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la empresa" required>
    </div>
    <div class="form-group">
        <label for="correo">Correo Electrónico:</label>
        <input type="email" class="form-control" id="correo" name="correo" placeholder="contacto@empresa.com" required>
    </div>
    <div class="form-group">
        <label for="numero_telefono">Número de Teléfono:</label>
        <input type="text" class="form-control" id="numero_telefono" name="numero_telefono" placeholder="Número de teléfono" required>
    </div>
    <button type="submit" class="btn btn-primary">Registrar Patrocinio</button>
</form>


<script src="path_to_bootstrap.js"></script>
</body>
</html>
