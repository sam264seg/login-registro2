<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="assets/css/donacion.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="registro_donaciones.js"></script>
<title>Gestión de Donaciones y Financiamiento</title>
</head>
<body>

<div class="container">
  <h1>Gestión de Donaciones y Financiamiento</h1>
  
  <div class="donation-registration">
  <h2>Registro de Donaciones</h2>
  <form id="donationForm">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>
    </div>
    <div class="form-group">
      <label for="correo">Correo:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="numero_telefono">Número de Teléfono:</label>
      <input type="tel" id="numero_telefono" name="numero_telefono" required>
    </div>
    <div class="form-group">
      <label for="cantidad">Cantidad:</label>
      <input type="number" id="cantidad" name="cantidad" step="0.01" required>
    </div>
    <div class="form-group">
      <label for="fecha_donacion">Fecha de Donación:</label>
      <input type="date" id="fecha_donacion" name="fecha_donacion">
    </div>
    <button type="submit">Generar Recibo</button>
  </form>
</div>





  <!-- Historial de Donaciones -->
  <div class="history-section">
    <h2>Historial de Donaciones</h2>
    <div class="form-group">
      <label for="memberSelect">Seleccionar Miembro:</label>
      <select id="memberSelect" name="memberSelect">
        <!-- Las opciones se generarán dinámicamente -->
      </select>
    </div>
    <button id="viewHistory">Ver Historial</button>
  </div>

  <!-- Administración de Campañas -->
  <div class="campaign-section">
    <h2>Administración de Campañas</h2>
    <div class="form-group">
      <label for="campaignName">Nombre de la Campaña:</label>
      <input type="text" id="campaignName" name="campaignName">
    </div>
    <div class="form-group">
      <label for="campaignGoal">Meta de Recaudación:</label>
      <input type="number" id="campaignGoal" name="campaignGoal">
    </div>
    <button id="manageCampaigns">Crear/Actualizar Campaña</button>
  </div>
  
  <button onclick="window.location.href='principal2.php';" class="btn-regresar">regresar</button>

</div>
</body>
</html>