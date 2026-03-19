<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Genie</title>

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="http://genielift.com/Assets/Icons/genie/favicon.ico">

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial;
}

html {
  scroll-behavior: smooth;
}

body {
  background: #f8fafc;
  color: #0f172a;
}

/* HEADER */
header {
  position: sticky;
  top: 0;
  background: linear-gradient(90deg, #0f172a, #1e3a8a);
  z-index: 100;
}

.nav-container {
  max-width: 1100px;
  margin: auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
}

.logo {
  height: 40px;
}

nav {
  display: flex;
  gap: 25px;
}

nav a {
  color: white;
  text-decoration: none;
  font-weight: bold;
  position: relative;
}

nav a::after {
  content: "";
  position: absolute;
  width: 0%;
  height: 2px;
  background: #38bdf8;
  left: 0;
  bottom: -4px;
  transition: 0.3s;
}

nav a:hover::after {
  width: 100%;
}

/* HERO */
.hero {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  min-height: 700px;

  background: url('https://www.genielift.com/images/default-source/aerial-pros-featured-thumbnails/genie-hero-image_new-update-q2.jpg?sfvrsn=b953960c_32');
  background-size: cover;
  background-position: center;
}

.hero-text {
  background: rgba(56,189,248,0.85);
  padding: 30px;
  border-radius: 20px;
  max-width: 600px;
  color: white;
  box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.hero-text h2 {
  font-size: 38px;
  margin-bottom: 15px;
}

.hero-text p {
  font-size: 18px;
}

/* SERVICIOS */
.grid {
  display: flex;
  justify-content: center;
  gap: 30px;
  flex-wrap: wrap;
}

.servicio {
  width: 260px;
  height: 200px;
  position: relative;
  border-radius: 15px;
  overflow: hidden;
  text-decoration: none;
}

.servicio img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: 0.4s;
}

/* overlay */
.servicio::after {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: rgba(30,58,138,0.6);
  top: 0;
  left: 0;
  transition: 0.3s;
}
#servicios {
  display: flex;
  margin-bottom: 60px;
  border-bottom: 1px solid #e5e7eb;
  flex-direction: column;
  align-items: center;
}
.servicio span {
  position: absolute;
  color: white;
  font-weight: bold;
  font-size: 18px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
}
#servicios h2 {
  position: relative;
}

#servicios h2::after {
  content: "";
  width: 60px;
  height: 3px;
  background: #0ea5e9;
  display: block;
  margin: 10px auto 0;
}
/* hover */
.servicio:hover img {
  transform: scale(1.1);
}

.servicio:hover::after {
  background: rgba(14,165,233,0.6);
}

/* CONTACTO */
.contacto {
  background: linear-gradient(135deg, #1e3a8a, #0ea5e9);
  padding: 60px 20px;
  color: white;
}

.contacto-container {
  max-width: 1100px;
  margin: auto;
  display: flex;
  gap: 40px;
}

.contacto-info {
  flex: 1;
}

.contacto-logo {
  height: 90px;
  margin-bottom: 20px;
}

.contacto-form {
  flex: 1;
  background: rgba(255,255,255,0.1);
  padding: 25px;
  border-radius: 15px;
}

.contacto-form h3 {
  margin-bottom: 15px;
}

.contacto-form form {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

input, textarea {
  padding: 12px;
  border-radius: 10px;
  border: none;
}

button {
  background: #0f172a;
  color: white;
  padding: 10px;
  border-radius: 10px;
  cursor: pointer;
}

/* FOOTER */
footer {
  background: #e2e8f0;
  padding: 15px;
  text-align: center;
}

/* RESPONSIVO */
@media (max-width: 768px) {
  .contacto-container {
    flex-direction: column;
  }
}
</style>
</head>

<body>

<header>
  <div class="nav-container">
    <img src="https://www.genielift.com/images/default-source/ui_and_nav/genie_logo_white9a8834a70271414fbbec2f12c85611e2ae9818cd24f8464eb26c927f6344ec58.png?sfvrsn=b7f9750a_27" class="logo">

    <nav>
      <a href="#inicio">Inicio</a>
      <a href="#servicios">Servicios</a>
      <a href="#contacto">Contacto</a>
    </nav>
  </div>
</header>

<section id="inicio" class="hero">
  <div class="hero-text">
    <h2>CALIDAD QUE MARCA LA DIFERENCIA</h2>
    <p>Equipos durables, soporte experto y soluciones confiables.</p>
  </div>
</section>

<section id="servicios">
  <h2>Servicios</h2>
  <div class="grid">

    <a href="2.pdf" target="_blank" class="servicio">
      <img src="https://www.genielift.com/images/default-source/default-album/manuals.jpg?sfvrsn=8d25d1ca_22">
      <span>Manuales</span>
    </a>

    <a href="1.pdf" target="_blank" class="servicio">
      <img src="https://th.bing.com/th/id/R.4e2a8be81a161a349de48eb03b688cb1?rik=U31mxrsnSgcoyQ&pid=ImgRaw&r=0">
      <span>Esquemas</span>
    </a>

    <a href="https://manuals.genielift.com/Parts%20And%20Service%20Manuals/1MainSMIndex.htm?_gl=1*mft5i1*_gcl_au*MTEyOTMzNDA1OC4xNzczMTE1MDI1" target="_blank" class="servicio">
      <img src="https://rentadeplataformas.com/wp-content/uploads/2018/06/productos-genie.jpg">
      <span>Manuales de usuario</span>
    </a>

  </div>
</section>

<section id="contacto" class="contacto">
  <div class="contacto-container">

    <div class="contacto-info">
      <img src="https://www.genielift.com/images/default-source/ui_and_nav/genie_logo_white9a8834a70271414fbbec2f12c85611e2ae9818cd24f8464eb26c927f6344ec58.png?sfvrsn=b7f9750a_27" class="contacto-logo">
      <p>📞 800-536-1810</p>
      <p>📧 ventas@genie.com</p>
      <p>📍 Nuevo León, México</p>
    </div>

    <div class="contacto-form">
      <h3>Solicita más información</h3>
      <form>
        <input type="text" placeholder="Nombre completo">
        <input type="email" placeholder="Correo">
        <input type="Numero" placeholder="Numero de telefono">
        <input type="text" placeholder="Empresa">
        <textarea placeholder="Observaciones"></textarea>
        <button>Enviar</button>
      </form>
    </div>

  </div>
</section>

<footer>
  <p>© 2026 Genie</p>
</footer>

</body>
</html>