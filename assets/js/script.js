document.getElementById("btn_iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn_registrarse").addEventListener("click", register);
window.addEventListener("resize",anchoPagina);

//declaracion de variables
var contenedor_login_register = document.querySelector(".contenedor_login-register");
var formulario_login = document.querySelector(".formulario_login");
var formulario_register = document.querySelector(".formulario_register");
var caja_trasera_login = document.querySelector(".caja_trasera-login");
var caja_trasera_register = document.querySelector(".caja_trasera-register");


function anchoPagina(){
    if(window.innerWidth > 850){
        caja_trasera_login.style.display="block";
        caja_trasera_register.style.display="block";
    }else{
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display ="none";
        formulario_login.style.display ="block";
        formulario_register.style.display="none";
        contenedor_login_register.style.left="0px";
    }
}

anchoPagina();

function iniciarSesion() {
    if (window.innerWidth > 850) {
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    } else {
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}


function register() {
    if (window.innerWidth > 850) {
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    } else {
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
