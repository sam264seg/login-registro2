<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="assets/css/voluntario.css">
<title>Publicar Oportunidad de Voluntariado</title>
</head>
<body>

    <div class="container">
    <div class="oportunidad_voluntariado">
    <h1>Publicar Oportunidad de Voluntariado</h1>

    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea><br><br>
    </div>
    <div class="form-group">
        <label for="fecha_inicio">Fecha de Inicio:</label>
        <input type="date" id="fecha_inicio" name="fecha_inicio" required><br><br>
    </div>
    <div class="form-group">
        <label for="fecha_fin">Fecha de Fin:</label>
        <input type="date" id="fecha_fin" name="fecha_fin" required><br><br>
    </div>
        <input type="submit" value="Publicar">
    </div>



    <div class="Aplicar-section">
    <h2>Aplicar para ser Voluntario</h2>
    <div class="form-group">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
    </div>
    <div class="form-group">
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required><br><br>
    </div>
    <div class="form-group">
        <label for="habilidades">Habilidades:</label>
        <textarea id="habilidades" name="habilidades"></textarea><br><br>
    </div>
        <input type="submit" value="Enviar Aplicación">
    </div>
    
    
    <div class="turnos-voluntariado">
    <h1>Registro de Turnos para Voluntarios</h1>
      <div class="form-group">
      <label for="fecha">Fecha:</label>
      <input type="date" id="fecha" name="fecha" required>
      </div>
      <div class="form-group">
      <label for="hora_inicio">Hora de Inicio:</label>
      <input type="time" id="hora_inicio" name="hora_inicio" required>
      </div>
      <div class="form-group">
      <label for="hora_fin">Hora de Fin:</label>
      <input type="time" id="hora_fin" name="hora_fin" required>
      </div>
      <input type="submit" value="Registrar Turno">
    </div>
   
    <button onclick="window.location.href='principal2.php';" class="btn-regresar">regresar</button>
     </div>
</body>
</html>
