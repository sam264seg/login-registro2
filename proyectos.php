<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="assets/css/proyectos.css">
<title>Gestión de Proyectos de Investigación</title>
<!-- Añade aquí tus hojas de estilo y scripts -->
</head>
<body>

    <div class="container">
        <!-- Creación de Proyectos y Asignación de Investigadores -->

    <form action="php/crear_proyecto.php" method="POST" class="creacion_proyectos">
    <h2>Crear Proyecto de Investigación</h2>
    <div class="form-group">
        <label for="nombreProyecto">Nombre del Proyecto:</label>
        <input type="text" id="nombreProyecto" name="nombre" required>
    </div>

    <div class="form-group">
        <label for="descripcionProyecto">Descripción:</label>
        <textarea id="descripcionProyecto" name="descripcion" required></textarea>
    </div>

    <div class="form-group">
        <label for="agenciaFinanciacion">Agencia de Financiación:</label>
        <input type="text" id="agenciaFinanciacion" name="agencia_financiacion">
    </div>
    <button type="submit" class="btn btn-primary">Crear Proyecto</button>
</form>

   <!-- seguimiento de proyectos
        <form method="post" action="seguimiento_proyecto.php">
          <h2>Seguimiento del Avance de Proyectos</h2>
          <div class="form-group">
            <label for="proyectoSeleccionado">Seleccionar Proyecto:</label>
            <select id="proyectoSeleccionado" name="proyecto_id" required>
               Opciones de proyectos cargadas dinámicamente 
            </select>
          </div>

          <div class="form-group">
            <label for="estadoProyecto">Estado del Proyecto:</label>
            <select id="estadoProyecto" name="estado_proyecto" required>
              <option value="inicio">Inicio</option>
              <option value="en_progreso">En Progreso</option>
              <option value="completado">Completado</option>
              <option value="pausado">Pausado</option>
            </select>
          </div>

          <div class="form-group">
            <label for="hitos">Hitos Alcanzados:</label>
            <textarea id="hitos" name="hitos_alcanzados" placeholder="Describa los hitos alcanzados..."></textarea>
          </div>

          <div class="form-group">
            <label for="tareasPendientes">Tareas Pendientes:</label>
            <textarea id="tareasPendientes" name="tareas_pendientes" placeholder="Liste las tareas pendientes..."></textarea>
          </div>

          <div class="form-group">
            <label for="comentarios">Comentarios/Notas:</label>
            <textarea id="comentarios" name="comentarios" placeholder="Cualquier comentario adicional..."></textarea>
          </div>

          <button type="submit">Actualizar Proyecto</button>
        </form>-->

        <!-- Seguimiento del Avance de Proyectos y Asignación de Fondos 
        <form method="post" action="asignar_fondos.php">
          <h2>Asignación de Fondos al Proyecto</h2>
          <div class="form-group">
            <label for="monto">Monto de Fondos Asignados:</label>
            <input type="number" id="monto" name="monto_fondos" step="0.01" placeholder="Ingrese el monto de fondos">
          </div>

          <div class="form-group">
            <label for="fondosAdicionales">Fondos Adicionales Requeridos:</label>
            <input type="number" id="fondosAdicionales" name="fondos_adicionales" step="0.01" placeholder="Ingrese cualquier fondo adicional requerido">
          </div>

          <button type="submit">Actualizar Proyecto</button>
        </form>-->

        <!-- Repositorio de Publicaciones Asociadas con Proyectos de Investigación 
        <form method="post" action="subir_publicacion.php" enctype="multipart/form-data">
          <h2>Subir Publicación Asociada</h2>
          <div class="form-group">
            <label for="tituloPublicacion">Título de la Publicación:</label>
            <input type="text" id="tituloPublicacion" name="titulo_publicacion" required>
          </div>

          <div class="form-group">
            <label for="autorPublicacion">Autor:</label>
            <input type="text" id="autorPublicacion" name="autor_publicacion" required>
          </div>

          <div class="form-group">
            <label for="archivoPublicacion">Archivo de la Publicación:</label>
            <input type="file" id="archivoPublicacion" name="archivo_publicacion" required>
          </div>

          <div class="form-group">
            <label for="proyectoRelacionado">Proyecto Relacionado:</label>
            <select id="proyectoRelacionado" name="proyecto_id">
              Opciones de proyectos cargadas dinámicamente -
            </select>
          </div>

          <button type="submit">Subir Publicación</button>
        </form>-->

        <button onclick="window.location.href='principal2.php';" class="btn-regresar">regresar</button>
     
      </div>

</body>
</html>

