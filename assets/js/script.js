// Añade un manejador de eventos al hacer clic en el botón "btn_iniciar-sesion"
document.getElementById("btn_iniciar-sesion").addEventListener("click", iniciarSesion);

// Añade un manejador de eventos al hacer clic en el botón "btn_registrarse"
document.getElementById("btn_registrarse").addEventListener("click", register);

// Añade un manejador de eventos para ejecutar la función "anchoPagina" cuando se cambia el tamaño de la ventana
window.addEventListener("resize", anchoPagina);

// Declaración de variables que se refieren a diferentes elementos del DOM
var contenedor_login_register = document.querySelector(".contenedor_login-register");
var formulario_login = document.querySelector(".formulario_login");
var formulario_register = document.querySelector(".formulario_register");
var caja_trasera_login = document.querySelector(".caja_trasera-login");
var caja_trasera_register = document.querySelector(".caja_trasera-register");

// Función que ajusta la visibilidad de ciertos elementos según el ancho de la ventana
function anchoPagina() {
    if (window.innerWidth > 850) {
        // Si el ancho es mayor a 850px, muestra ambos fondos (login y registro)
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "block";
    } else {
        // Si el ancho es menor a 850px, solo muestra el fondo de registro y ajusta otros elementos
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
    }
}

// Llamada inicial a la función para establecer el estado inicial de los elementos
anchoPagina();

// Función que maneja la lógica al hacer clic en "Iniciar sesión"
function iniciarSesion() {
    if (window.innerWidth > 850) {
        // En pantallas anchas, ajusta la visualización y opacidad de los formularios y fondos
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    } else {
        // En pantallas estrechas, ajusta la visualización de los formularios y fondos
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}

// Función que maneja la lógica al hacer clic en "Registrarse"
function register() {
    if (window.innerWidth > 850) {
        // En pantallas anchas, ajusta la visualización y opacidad de los formularios y fondos
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    } else {
        // En pantallas estrechas, ajusta la visualización de los formularios y fondos
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }
}
<<<<<<< HEAD
=======

<<<<<<< HEAD
=======
document.addEventListener('DOMContentLoaded', function () {

    // Manejar el envío del formulario de donaciones
    document.getElementById('submitDonation').addEventListener('click', function (event) {
      event.preventDefault();
  
      const donorName = document.getElementById('donorName').value;
      const donorAmount = document.getElementById('donorAmount').value;
      const donationDate = document.getElementById('donationDate').value;
  
      if (!donorName || donorAmount <= 0 || !donationDate) {
        alert('Por favor, completa todos los campos correctamente.');
        return;
      }
  
      // Aquí iría el código para enviar los datos al servidor
      console.log('Donación registrada:', { donorName, donorAmount, donationDate });
      alert('Recibo generado para ' + donorName);
  
      // Limpiar formulario
      document.getElementById('donorName').value = '';
      document.getElementById('donorAmount').value = '';
      document.getElementById('donationDate').value = '';
    });
  
    // Manejar la visualización del historial de donaciones
    document.getElementById('viewHistory').addEventListener('click', function (event) {
      event.preventDefault();
  
      const selectedMember = document.getElementById('memberSelect').value;
  
      // Aquí iría el código para recuperar y mostrar el historial de donaciones del miembro seleccionado
      console.log('Mostrar historial para el miembro:', selectedMember);
    });
  
    // Manejar la creación o actualización de campañas
    document.getElementById('manageCampaigns').addEventListener('click', function (event) {
      event.preventDefault();
  
      const campaignName = document.getElementById('campaignName').value;
      const campaignGoal = document.getElementById('campaignGoal').value;
  
      if (!campaignName || campaignGoal <= 0) {
        alert('Por favor, introduce un nombre válido para la campaña y una meta de recaudación positiva.');
        return;
      }
  
      // Aquí se enviarían los datos de la campaña al servidor
      console.log('Campaña creada/actualizada:', { campaignName, campaignGoal });
    });
  
    // Cargar datos iniciales, como la lista de miembros
    // Aquí iría el código para cargar datos del servidor
    console.log('Cargar datos iniciales...');
  });
  
>>>>>>> d6d333c3d059e50f084fc91caa5b9e6cc0b58743
>>>>>>> e6e0b5ad315fcc9ec424b8e8ec128fa5c6649797
