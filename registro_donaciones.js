// registro_donaciones.js

$(document).ready(function() {
    console.log("Script cargado correctamente");
  
    $("#donationForm").submit(function(event) {
      console.log("Formulario enviado");
  
      // Obtener datos del formulario
      var nombre = $("#nombre").val();
      var email = $("#email").val();
      var numero_telefono = $("#numero_telefono").val();
      var cantidad = $("#cantidad").val();
      var fecha_donacion = $("#fecha_donacion").val();
  
      console.log("Datos del formulario:", nombre, email, numero_telefono, cantidad, fecha_donacion);
  
      // Realizar la solicitud AJAX
      $.ajax({
        type: "POST",
        url: "procesar_donacion.php",
        data: {
          nombre: nombre,
          email: email,
          numero_telefono: numero_telefono,
          cantidad: cantidad,
          fecha_donacion: fecha_donacion
        },
        success: function(response) {
          // Manejar la respuesta del servidor si es necesario
          console.log("Respuesta del servidor:", response);
        },
        error: function(error) {
          // Manejar errores si es necesario
          console.log("Error en la solicitud AJAX:", error);
        }
      });
  
      // Evitar que el formulario se envíe de la manera convencional
      event.preventDefault();
    });
  });
  