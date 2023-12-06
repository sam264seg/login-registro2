<?php

session_start();

if (!isset($_SESSION["usuario"])) {
  echo '
  <script>
  alert("Por favor debes iniciar sesión");
  window.location = "index.php";
  </script>';
  session_destroy();
  die();
}
//session_destroy();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/estilos2.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
  <title>Pagina principal AIP</title>
  <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous">
  </script>
  <script defer src="index.js"></script>
</head>

<body>

<a></a>

<!--codigo parte de barra de navegacion-->
  <header class="header">
    <h1 class="main-title">AIP<span class="subtitle">(Asociacion de interes publico)</span></h1>
    <nav class="nav">
      <ul class="nav-menu">
        <button class="nav-toggle" aria-label="Abrir menú">
          <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu">
          <li class="nav-menu-item">
            <a href="principal2.php" class="nav-menu-link nav-link">Inicio</a>
          </li>
         <!-- <li class="nav-menu-item">
            <a href="index.php" class="nav-menu-link nav-link">Inicia sesion/Registro</a>
          </li>-->
          <li class="nav-menu-item">
            <a href="#" class="nav-menu-link nav-link">AIP</a>
            <div class="nav-menu-item-content">
              <a href="donacion.php"> donacion</a>
              <a href="voluntario.php">volutario</a>
              <a href="proyectos.php">proyectos</a>
              <a href="#mision-section">eventos</a>
            <!--  <a href="#colaboradores-section">accionista</a>-->
            </div>
          </li>
        <!--  <li class="nav-menu-item">
            <a href="#" class="nav-menu-link nav-link">donacion</a>
          </li>-->
          <li class="nav-menu-item">
            <a href="#" class="nav-menu-link nav-link">noticias</a>
          </li>
          <li class="nav-menu-item">
            <a href="#" class="nav-menu-link nav-link">Denuncias</a>
          </li>
          <li class="nav-menu-item">
            <a href="php/cerrar_sesion.php" class="nav-menu-link nav-link">Cerrar sesión</a>
          </li>
          <li class="nav-menu-item">
            <a href="#" class="nav-menu-link nav-link nav-menu-link_active">contactos/redes</a>
          </li>
        </ul>
    </nav>
  </header>


  <div class="welcome-message">
    <p>¡Bienvenidos a la Asociación de Interés Público!</p>
    <p>Es un honor y un placer recibirte en nuestro colectivo. Estás aquí porque compartes una visión y un propósito con
      nosotros, y valoramos profundamente tu decisión de unirte. Cada miembro es esencial, y tu aporte y energía son
      cruciales para llevar adelante nuestra misión.</p>
    <p>Queremos asegurarnos de que tu experiencia con nosotros no solo sea gratificante, sino que también te brinde la
      oportunidad de crecer, aprender y hacer una diferencia palpable. Nuestra promesa es proporcionarte un ambiente en
      el cual tus habilidades y conocimientos no solo sean valorados, sino también potenciados.</p>
    <p>Gracias por elegir ser parte de este viaje con nosotros. Juntos, impulsados por nuestra pasión compartida,
      haremos un cambio significativo y positivo en nuestra comunidad y más allá. ¡Bienvenido a bordo!</p>
  </div>

  <main>
    <section class="contenedor sobre_nosotros">
      <h2 class="titulo">Sobre Nosotros</h2>
      <div class="contenedor-sobre-nosotros">
        <img src="assets/imagenes/ilustracion2.svg" alt="" class="imagen-about-us">
        <div class="contenido-textos">
          <h3><span>1</span>Vision</h3>
          <p>
            El texto proporcionado describe la misión, visión y valores de una Autoridad de Interés Público (AIP) en
            términos de promover la confianza, transparencia y equidad en sus acciones, garantizar la gestión
            responsable de los recursos, y promover la participación ciudadana y la colaboración institucional. También
            se enfoca en la innovación, liderazgo y desarrollo sostenible, manteniendo un compromiso con la mejora
            continua y el respeto a los derechos humanos. Se refleja una actitud proactiva hacia los desafíos emergentes
            y un fuerte enfoque en la regulación, supervisión y cumplimiento de leyes y normativas en su ámbito de
            influencia. Además, subraya la importancia de colaborar con otras instituciones para encontrar soluciones
            colaborativas a los problemas sociales, siempre enmarcado en principios de transparencia y rendición de
            cuentas.
          </p>
          <h3><span>2</span>Mision</h3>
          <p>Nosotros, como Autoridad de Interés Público, nos dedicamos a ser garantes de los derechos y bienestar de la
            comunidad. Nuestra misión principal radica en asegurar el cumplimiento de las normativas y leyes vigentes,
            fomentando la transparencia, rendición de cuentas y justicia. Buscamos ser un enlace entre el gobierno y la
            ciudadanía, facilitando una comunicación abierta y efectiva. Nos empeñamos en identificar y atender las
            inquietudes del público, promoviendo un entendimiento claro de las políticas y procedimientos
            gubernamentales, siempre con el compromiso de mantener altos estándares éticos y profesionales.</p>
        </div>
    </section>

    <!--portafolio-->
    <section class="portafolio">
      <div class="contenedor">
        <h2 class="titulo">Centros de investigacion</h2>
        <div class="galeria-port">
          <div class="imagen-port">
            <a href="https://indicasat.org.pa/" class="galeria-link">
              <img src="assets/imagenes/img1.png" alt="">
              <div class="hover-galeria">
                <img src="assets/imagenes/icono1.png" alt="">
                <p>Nuestro trabajo</p>
              </div>
            </a>
          </div>
          <div class="imagen-port">
            <a href="https://ciedupanama.org/" class="galeria-link">
              <img src="assets/imagenes/img2.png" alt="">
              <div class="hover-galeria">
                <img src="assets/imagenes/icono1.png" alt="">
                <p>Nuestro trabajo</p>
              </div>
            </a>
          </div>
          <div class="imagen-port">
            <a href="https://www.gatech.pa/" class="galeria-link">
              <img src="assets/imagenes/img3.png" alt="">
              <div class="hover-galeria">
                <img src="assets/imagenes/icono1.png" alt="">
                <p>Nuestro trabajo</p>
              </div>
            </a>
          </div>
          <div class="imagen-port">
            <a href="https://www.cenamep.org.pa/" class="galeria-link">
              <img src="assets/imagenes/img4.png" alt="">
              <div class="hover-galeria">
                <img src="assets/imagenes/icono1.png" alt="">
                <p>Nuestro trabajo</p>
              </div>
            </a>
          </div>
          <div class="imagen-port">
            <a href="https://www.senacyt.gob.pa/" class="galeria-link">
              <img src="assets/imagenes/img5.png" alt="">
              <div class="hover-galeria">
                <img src="assets/imagenes/icono1.png" alt="">
                <p>Nuestro trabajo</p>
              </div>
            </a>
          </div>
          <div class="imagen-port">
            <a href="https://cieps.org.pa/" class="galeria-link">
              <img src="assets/imagenes/img6.png" alt="">
              <div class="hover-galeria">
                <img src="assets/imagenes/icono1.png" alt="">
                <p>Nuestro trabajo</p>
              </div>
            </a>
          </div>
          <div class="imagen-port">
            <a href="https://coiba.org.pa/" class="galeria-link">
              <img src="assets/imagenes/img7.png" alt="">
              <div class="hover-galeria">
                <img src="assets/imagenes/icono1.png" alt="">
                <p>Nuestro trabajo</p>
              </div>
            </a>
          </div>
          <div class="imagen-port">
            <a href="https://www.infoplazas.org.pa/" class="galeria-link">
              <img src="assets/imagenes/img8.png" alt="">
              <div class="hover-galeria">
                <img src="assets/imagenes/icono1.png" alt="">
                <p>Nuestro trabajo</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--clientes comentarios
    <section class="clientes contenedor">
      <h2 class="titulo">Que dicen nuestros clientes</h2>
      <div class="cards">
        <div class="card">
          <img src="assets/imagenes/face1.jpg" alt="">
          <div class="contenido-texto-card">
            <h4>Name</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, sapiente!</p>
          </div>
        </div>
        <div class="card">
          <img src="assets/imagenes/face2.jpg" alt="">
          <div class="contenido-texto-card">
            <h4>Name</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, sapiente!</p>
          </div>
        </div>
      </div>
    </section>-->


    <section class="about-services">
      <div class="contenedor">
        <h2 class="titulo">Nuestros servicios</h2>
        <div class="servicio-cont">
          <div class="servicio-ind">
            <img src="assets/imagenes/ilustracion1.svg" alt="">
            <h3>Educación y Capacitación: </h3>
            <p>Establecimiento y mantenimiento de escuelas públicas, programas de educación para
              adultos, y capacitaciones profesionales para mejorar las habilidades laborales de 
              la población.</p>
          </div>
          <div class="servicio-ind">
            <img src="assets/imagenes/ilustracion4.svg" alt="">
            <h3>Servicios Sociales:</h3>
            <p>Programas de ayuda para personas en situación de vulnerabilidad, como servicios de 
              asistencia a personas mayores, niños, y personas con discapacidades.</p>
          </div>
          <div class="servicio-ind">
            <img src="assets/imagenes/ilustracion3.svg" alt="">
            <h3>Desarrollo Económico: </h3>
            <p>Apoyo a pequeñas y medianas empresas, fomento del turismo, y atracción de 
              inversiones que generen empleo.</p>
          </div>
        </div>
      </div>
    </section>
  </main>


  <footer>
    <div class="contenedor-footer">
      <div class="content-foo">
        <h4>numero de telefono</h4>
        <p>1234-7896</p>
      </div>
      <div class="content-foo">
        <h4>correo</h4>
        <p>AIP2609@GMAIL.COM</p>
      </div>
      <div class="content-foo">
        <h4>Locaciòn</h4>
        <p>CIUDAD DE PANAMA</p>
      </div>
    </div>
    <h2 class="titulo-final">&copy; AIP_Diseño | Jennifer Arcia-Carlos Solis- Samuel Gutiérrez</h2>
  </footer>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>
<!-- Code injected