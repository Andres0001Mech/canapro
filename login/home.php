<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página con Preloader y Login</title>

  <!-- BOOTSTRAP 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- ICONOS BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- TU CSS -->
  <link rel="stylesheet" href="../css/animacion.css">
</head>
<body class="bg-light">

<!-- HEADER -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="../index.php">
      <img src="../images/canapro-cac-grande-h.png" alt="Logo Canapro" height="60" class="me-2">
    </a>

    <!-- Botón responsive -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menú -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
      <ul class="navbar-nav">
        <li class="nav-item">
            <b><a style="text-decoration: none; color:gray;" class="link" href="../index.php">
             Ir a Inicio
          </a></b> &nbsp;&nbsp;&nbsp;
         <b><a style="text-decoration: none; color:gray;" class="link" href="login.php">
            Iniciar Curso <i class="bi bi-box-arrow-in-right me-1"></i> 
          </a></b> 
        </li>
      </ul>
    </div>
  </div>
</nav>


  <!-- PRELOADER -->
  <div class="preloader1 d-flex justify-content-center align-items-center vh-100 w-100 position-fixed bg-white" 
       id="preloader" style="z-index: 9999;">
    <div class="preloader-body1 text-center">
      <div class="cssload-container1">
        <img src="../images/logo_cana_anima.jpg" alt="Logo Canapro" 
             class="img-fluid mb-3" style="max-width:120px;">
      </div>
    </div>
  </div>

  <!-- CONTENIDO -->
  <div class="container" style="margin-top: 120px;">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="card shadow-sm border-0 rounded-3">
          <div class="card-body p-5">
            <br>
            <img src="" alt="">
            <h1 class="text fw-bold mb-4 text-center">
              Curso Básico de Economía Solidaria
            </h1>
            <p class="text-muted">
              <strong>Objetivo general:</strong> Brindar las herramientas conceptuales, metodológicas y normativas que permitan el acceso equitativo a las oportunidades y beneficios del modelo solidario por parte de las personas, grupos o comunidades interesadas en crear y fortalecer organizaciones solidarias.
            </p>
            <hr>
            <h4 class="fw-semibold text-dark mt-4">Objetivos específicos</h4>
            <ul class="list-group list-group-flush mb-4">
              <li class="list-group-item">Identificar y comprender los conceptos, principios y valores del sector solidario.</li>
              <li class="list-group-item">Conocer la estructura del sistema de economía solidaria como mecanismo de participación.</li>
              <li class="list-group-item">Describir los pasos para lograr una eficaz participación y desarrollo autogestionario.</li>
              <li class="list-group-item">Explicar aspectos técnicos y legales aplicables al fortalecimiento del modelo.</li>
              <li class="list-group-item">Fomentar proyectos sociales, educativos y económicos en el marco asociativo.</li>
              <li class="list-group-item">Promover el desarrollo humano, económico y social en las comunidades.</li>
              <li class="list-group-item">Impulsar la educación humanista y solidaria como política institucional.</li>
              <li class="list-group-item">Desarrollar un currículo basado en principios y valores de la Economía Solidaria.</li>
              <li class="list-group-item">Cultivar identidad y sentido de pertenencia en las organizaciones.</li>
              <li class="list-group-item">Integrar la formación solidaria en las actividades sociales y empresariales.</li>
            </ul>

            <h4 class="fw-semibold text-dark">Metodología</h4>
            <p class="text-muted">
              La metodología será <em>participativa, interactiva y teórico-práctica</em>, basada en talleres y ambientes de aprendizaje que contribuyan a la comprensión, interpretación y aplicación de los conceptos. 
              <br><br>
              Se utilizarán estrategias de análisis de la realidad solidaria en Colombia, necesidades sociales y proyectos de desarrollo, apoyados en un proceso de gestión, seguimiento y mejora continua.
            </p>

            <div class="alert alert-info mt-4">
              <i class="bi bi-clock-fill me-2"></i>
              <strong>Duración:</strong> 20 horas presenciales o semipresenciales.
            </div>

            <h4 class="fw-semibold text-dark">Plan de Estudios</h4>
            <ul class="list-group list-group-numbered mb-4">
              <li class="list-group-item">Conceptos básicos de la Economía Solidaria: ética, valores y principios.</li>
              <li class="list-group-item">Asociatividad y emprendimiento solidario, trabajo en equipo y educación.</li>
              <li class="list-group-item">Responsabilidad social y medio ambiente.</li>
              <li class="list-group-item">Contexto socioeconómico de la economía solidaria.</li>
              <li class="list-group-item">Tipos de organizaciones de economía solidaria.</li>
              <li class="list-group-item">Antecedentes históricos de las organizaciones solidarias.</li>
              <li class="list-group-item">Características económicas, sociales y culturales.</li>
              <li class="list-group-item">Estructura orgánica y administrativa.</li>
              <li class="list-group-item">Marco jurídico aplicable.</li>
              <li class="list-group-item">Fundamentos, estructura y clases de cooperativas.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- FOOTER -->
<footer class="bg-light text-dark mt-5 border-top">
  <div class="container py-4">
    <div class="row align-items-center">
      
      <!-- Logo y texto -->
      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
        <img src="../images/canapro-cac-grande-h.png" alt="Logo Canapro" height="50" class="mb-2">
      </div>

      <!-- Redes sociales -->
      <div class="col-md-6 text-center text-md-end">
        <a href="#" class="text-dark me-3 fs-5"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-dark me-3 fs-5"><i class="bi bi-instagram"></i></a>
        <a href="#" class="text-dark me-3 fs-5"><i class="bi bi-whatsapp"></i></a>
        <a href="mailto:info@canapro.com" class="text-dark fs-5"><i class="bi bi-envelope-fill"></i></a>
      </div>
    </div>

    <hr class="border-secondary">
    <p class="text-center mb-0 small text-muted">&copy; Desarrollado por © TIC´s - Todos los derechos reservados  - CANAPRO C.A.C.</p>
  </div>
</footer>

  <!-- BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- TU JS -->
  <script src="../js/animacion.js"></script>

</body>
</html>
