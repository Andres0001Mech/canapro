
<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] != 'estudiante') {
    header("Location: login.php");
    exit();
}

$pagina = isset($_GET['pagina']) ? intval($_GET['pagina']) : 1;
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lección 1 – Curso Economía Solidaria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="bg-light">

<div class="container py-5">

  <?php if ($pagina === 1): ?>

    
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/images/canapro-cac-grande-h.png" width="150" alt="Logo Canapro" class="me-2">
    </a>
    <div class="d-flex align-items-center">
      <span class="navbar-text text-dark me-3">
        <i class="fa-solid fa-user"></i> <?php echo $_SESSION['usuario']; ?>
      </span>
      <a href="../logout.php" class="btn btn-outline-primary btn-sm d-flex align-items-center">
        <i class="fa-solid fa-right-from-bracket me-2"></i> Cerrar sesión
      </a>
    </div>
  </div>
</nav>

<!-- Contenido -->
<div class="container py-5">
  <!-- Encabezado -->
  <div class="text-center mb-5">
    <h1 class="fw-bold text-primary">
      <i class="fa-solid fa-book-open me-2"></i>
     ¡Bienvenido a la primera unidad del curso básico de Economía Solidaria! 🎓
    </h1>
    <hr class="w-50 mx-auto">
  </div>

  <!-- Secciones principales -->
  <div class="row" >
    <!-- Contenido -->
    <div class="col-lg-9">
      <div id="etica" class="card shadow-sm rounded-4 mb-4">
        <div class="card-body">
          <h3 class="card-title text-success">
            <i class="fa-solid fa-scale-balanced me-2"></i> Ética
          </h3>
          <p class="text-muted">
            La ética, o filosofía moral, es la rama de la filosofía que estudia la conducta humana, lo correcto
            e incorrecto, lo bueno y lo malo… La economía solidaria incorpora estos principios éticos en la gestión
            económica buscando equidad, justicia y fraternidad.
          </p>
        </div>
      </div>

      <div id="valores" class="card shadow-sm rounded-4 mb-4">
        <div class="card-body">
          <h3 class="card-title text-primary">
            <i class="fa-solid fa-gem me-2"></i> Valores
          </h3>
          <p class="text-muted">Los valores son principios que guían la conducta humana. Algunos valores fundamentales son:</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa-solid fa-hand-holding-heart text-danger me-2"></i> Solidaridad</li>
            <li class="list-group-item"><i class="fa-solid fa-briefcase text-secondary me-2"></i> Responsabilidad</li>
            <li class="list-group-item"><i class="fa-solid fa-shield-halved text-info me-2"></i> Confianza</li>
            <li class="list-group-item"><i class="fa-solid fa-hands-helping text-primary me-2"></i> Compromiso</li>
            <li class="list-group-item"><i class="fa-solid fa-users text-success me-2"></i> Respeto</li>
            <li class="list-group-item"><i class="fa-solid fa-book text-warning me-2"></i> Conocimiento</li>
            <li class="list-group-item"><i class="fa-solid fa-people-group text-dark me-2"></i> Participación</li>
          </ul>
        </div>
      </div>

      <div id="principios" class="card shadow-sm rounded-4 mb-4">
        <div class="card-body">
          <h3 class="card-title text-warning">
            <i class="fa-solid fa-scroll me-2"></i> Principios
          </h3>
          <p class="text-muted">Los principios son normas que orientan el comportamiento humano. Destacan:</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="fa-solid fa-scale-balanced text-success me-2"></i> Equidad</li>
            <li class="list-group-item"><i class="fa-solid fa-handshake text-primary me-2"></i> Cooperación</li>
          </ul>
        </div>
      </div>

      <div id="solidaridad" class="card shadow-sm rounded-4 mb-4">
        <div class="card-body">
          <h3 class="card-title text-danger">
            <i class="fa-solid fa-people-carry-box me-2"></i> Solidaridad
          </h3>
          <p class="text-muted">
            La solidaridad implica ayudar sin esperar nada a cambio, promoviendo unidad y apoyo mutuo en la comunidad.
          </p>
        </div>
      </div>

      <div id="economia" class="card shadow-sm rounded-4 mb-4">
        <div class="card-body">
          <h3 class="card-title text-info">
            <i class="fa-solid fa-coins me-2"></i> Economía
          </h3>
          <p class="text-muted">
            La economía es la ciencia social que estudia la administración de los recursos para satisfacer necesidades humanas.
          </p>
        </div>
      </div>

      <div id="economia_solidaria" class="card shadow-sm rounded-4 mb-5">
        <div class="card-body">
          <h3 class="card-title text-success">
            <i class="fa-solid fa-leaf me-2"></i> Economía Solidaria
          </h3>
          <p class="text-muted">
            La economía solidaria es un sistema socioeconómico que promueve el bien común, la equidad,
            la participación democrática y la ausencia de ánimo de lucro, generando desarrollo humano y social.
          </p>
        </div>
      </div>

      <!-- Video -->
      <div id="video" class="mb-5">
        <h4 class="text-center mb-3">
          <i class="fa-solid fa-video me-2"></i> Video explicativo
        </h4>
        <div class="ratio ratio-16x9 shadow rounded-4 overflow-hidden">
          <iframe 
            src="https://www.youtube.com/embed/u4cjoYZH4HQ" 
            title="Video de Economía Solidaria" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
        </div>
      </div>


    </div>

    <!-- Índice lateral -->
    <div class="col-lg-3 d-none d-lg-block">
      <div class="sticky-top" style="top: 100px;">
        <div class="card shadow-sm rounded-4">
          <div class="card-header bg-primary text-white fw-bold">
            <i class="fa-solid fa-list me-2"></i> Contenido
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="#etica" class="text-decoration-none">Ética</a></li>
            <li class="list-group-item"><a href="#valores" class="text-decoration-none">Valores</a></li>
            <li class="list-group-item"><a href="#principios" class="text-decoration-none">Principios</a></li>
            <li class="list-group-item"><a href="#solidaridad" class="text-decoration-none">Solidaridad</a></li>
            <li class="list-group-item"><a href="#economia" class="text-decoration-none">Economía</a></li>
            <li class="list-group-item"><a href="#economia_solidaria" class="text-decoration-none">Economía Solidaria</a></li>
            <li class="list-group-item"><a href="#video" class="text-decoration-none">Video</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <a href="leccion0.php" class="btn btn-outline-secondary me-2"><i class="fa-solid fa-home me-1"></i> Inicio</a>
    <a href="?pagina=2" class="btn btn-primary">Siguiente <i class="fa-solid fa-arrow-right ms-1"></i></a>

  <?php elseif ($pagina === 2): ?>
    
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/images/canapro-cac-grande-h.png" width="150" alt="Logo Canapro" class="me-2">
    </a>
    <div class="d-flex align-items-center">
      <span class="navbar-text text-dark me-3">
        <i class="fa-solid fa-user"></i> <?php echo $_SESSION['usuario']; ?>
      </span>
      <a href="../logout.php" class="btn btn-outline-primary btn-sm d-flex align-items-center">
        <i class="fa-solid fa-right-from-bracket me-2"></i> Cerrar sesión
      </a>
    </div>
  </div>
</nav>

<!-- Contenedor principal -->
<div class="container py-5">
  <div class="row">
    
    <!-- Contenido -->
    <div class="col-lg-9">
      
      <!-- Encabezado -->
      <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">
          <i class="fa-solid fa-people-group me-2"></i>
          Asociatividad y Emprendimiento Solidario
        </h1>
        <p class="text-muted fs-5">
          Abordamos la asociatividad, emprendimiento, organización, trabajo en equipo y educación solidaria.
        </p>
        <hr class="w-50 mx-auto">
      </div>

      <!-- Asociatividad -->
      <div id="asociatividad" class="card shadow-sm rounded-4 mb-4">
        <div class="card-body">
          <h3 class="card-title text-success">
            <i class="fa-solid fa-users me-2"></i> Asociatividad
          </h3>
          <p>
            La asociatividad es un enfoque que reconoce la importancia estratégica del trabajo conjunto y articulado entre las personas.
          </p>
          <p class="text-muted">
            Unir personas que colaboren en un mismo fin, compartir ideales y sumar esfuerzos para dar respuestas colectivas. 
            Surge de un acuerdo común en el que un grupo humano decide asociarse por intereses y objetivos similares.
          </p>
        </div>
      </div>

      <!-- Emprendimiento Solidario -->
      <div id="emprendimiento" class="card shadow-sm rounded-4 mb-4">
        <div class="card-body">
          <h3 class="card-title text-primary">
            <i class="fa-solid fa-lightbulb me-2"></i> Emprendimiento Solidario
          </h3>
          <p>
            El emprendimiento es la actitud y aptitud de una persona para iniciar proyectos, avanzar y alcanzar nuevas metas.
          </p>
          <p class="text-muted">
            En el marco de la economía solidaria, se orienta a objetivos comunes que generen beneficios sociales. 
            Refleja compromiso, identidad y pertenencia de los asociados hacia la empresa, promoviendo innovación e investigación.
          </p>
        </div>
      </div>

      <!-- Organización Solidaria -->
      <div id="organizacion" class="card shadow-sm rounded-4 mb-4">
        <div class="card-body">
          <h3 class="card-title text-danger">
            <i class="fa-solid fa-building me-2"></i> Organización Solidaria
          </h3>
          <p>
            Organización de carácter asociativo y autogestionada, sin ánimo de lucro, cuyo fin es el bien común y la satisfacción de necesidades humanas.
          </p>
          <p class="text-muted">
            Se fundamenta en principios como la libre adhesión, la democracia, la ausencia de ganancia individual y la independencia frente al Estado.
          </p>
        </div>
      </div>

      <!-- Trabajo en Equipo -->
      <div id="equipo" class="card shadow-sm rounded-4 mb-4">
        <div class="card-body">
          <h3 class="card-title text-warning">
            <i class="fa-solid fa-people-carry-box me-2"></i> Trabajo en Equipo
          </h3>
          <p>
            El trabajo en equipo implica cooperación organizada, en donde cada persona asume una parte con un mismo objetivo común.
          </p>
          <p class="text-muted">
            Es una de las formas más antiguas de organización laboral, destacando su capacidad de articular esfuerzos para alcanzar metas colectivas.
          </p>
        </div>
      </div>

      <!-- Educación Solidaria -->
      <div id="educacion" class="card shadow-sm rounded-4 mb-5">
        <div class="card-body">
          <h3 class="card-title text-info">
            <i class="fa-solid fa-graduation-cap me-2"></i> Educación Solidaria
          </h3>
          <p>
            La educación solidaria fortalece competencias básicas y ciudadanas en los estudiantes, promoviendo valores de cooperación y ayuda mutua.
          </p>
          <p class="text-muted">
            Busca consolidar procesos de autogestión empresarial sostenibles que mejoren la calidad de vida de los asociados y la comunidad.
          </p>
        </div>
      </div>


    </div>

    <!-- Índice lateral -->
    <div class="col-lg-3 d-none d-lg-block">
      <div class="sticky-top" style="top: 100px;">
        <div class="card shadow-sm rounded-4">
          <div class="card-header bg-primary text-white fw-bold">
            <i class="fa-solid fa-list me-2"></i> Contenido
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="#asociatividad" class="text-decoration-none">Asociatividad</a></li>
            <li class="list-group-item"><a href="#emprendimiento" class="text-decoration-none">Emprendimiento Solidario</a></li>
            <li class="list-group-item"><a href="#organizacion" class="text-decoration-none">Organización Solidaria</a></li>
            <li class="list-group-item"><a href="#equipo" class="text-decoration-none">Trabajo en Equipo</a></li>
            <li class="list-group-item"><a href="#educacion" class="text-decoration-none">Educación Solidaria</a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</div>





    <a href="?pagina=1" class="btn btn-outline-secondary"><i class="fa-solid fa-arrow-left me-1"></i> Anterior</a>
    <a href="?pagina=3" class="btn btn-primary">Siguiente <i class="fa-solid fa-arrow-right ms-1"></i></a>


 <?php elseif ($pagina === 3): ?>
  
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/images/canapro-cac-grande-h.png" width="150" alt="Logo Canapro" class="me-2">
    </a>
    <div class="d-flex align-items-center">
      <span class="navbar-text text-dark me-3">
        <i class="fa-solid fa-user"></i> <?php echo $_SESSION['usuario']; ?>
      </span>
      <a href="../logout.php" class="btn btn-outline-primary btn-sm d-flex align-items-center">
        <i class="fa-solid fa-right-from-bracket me-2"></i> Cerrar sesión
      </a>
    </div>
  </div>
</nav>

     <!-- Contenedor principal -->
  <div class="container py-5">

    <!-- Encabezado -->
    <div class="text-center mb-5">
      <h1 class="fw-bold text-primary">
        <i class="fa-solid fa-hand-holding-heart me-2"></i>
        Responsabilidad Social y Medio Ambiente
      </h1>
      <p class="text-muted">Exploraremos el compromiso social y ambiental en el marco de la economía solidaria 🌍🤝</p>
    </div>

    <!-- Sección Responsabilidad Social -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="card-title text-success">
          <i class="fa-solid fa-people-group me-2"></i> ¿Qué es Responsabilidad Social?
        </h3>
        <p>
          La responsabilidad social se refiere al compromiso y obligación de los individuos y organizaciones de contribuir al bienestar de la sociedad y al cuidado del entorno. 
          Está estrechamente relacionada con la ética y la moral, ya que las decisiones que se tomen impactan en el resto de la comunidad.
        </p>
        <p>
          Aunque no tiene fuerza de ley, es esencial que los ciudadanos adopten una actitud consciente frente a la sociedad y el medio ambiente. 
          Su cumplimiento genera beneficios como mayor reputación, confianza pública y bienestar colectivo.
        </p>
      </div>
    </div>

    <!-- Responsabilidad Social Empresarial -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="card-title text-primary">
          <i class="fa-solid fa-building me-2"></i> Responsabilidad Social Empresarial
        </h3>
        <p>
          La Responsabilidad Social Empresarial (RSE) es un modo de gestión que incorpora el respeto por los valores éticos, 
          las personas, las comunidades y el medio ambiente. Busca generar un desarrollo sostenible y un bienestar compartido.
        </p>
        <p>
          En la economía solidaria, la RSE es parte de sus principios fundacionales como el <strong>compromiso con la comunidad</strong>. 
          No se limita a ayudas ocasionales, sino que implica una actuación consciente, comprometida y continua para generar cambios sostenibles.
        </p>
      </div>
    </div>

    <!-- Relación Economía y Responsabilidad Social -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="card-title text-warning">
          <i class="fa-solid fa-scale-balanced me-2"></i> Responsabilidad Social y Economía Solidaria
        </h3>
        <p>
          La economía solidaria integra la responsabilidad social como un pilar fundamental. 
          Busca que las empresas antepongan valores como la solidaridad en sus decisiones, 
          promoviendo una cultura empresarial que asuma compromisos éticos y sociales como parte de su quehacer cotidiano.
        </p>
      </div>
    </div>

    <!-- Medio Ambiente -->
    <div class="card shadow-sm mb-5">
      <div class="card-body">
        <h3 class="card-title text-success">
          <i class="fa-solid fa-leaf me-2"></i> ¿Qué es Medio Ambiente?
        </h3>
        <p>
          El medio ambiente es el conjunto equilibrado de elementos naturales, sociales y artificiales que rodean al ser humano. 
          La economía solidaria lo reconoce como parte esencial del desarrollo sostenible.
        </p>
        <p>
          Según la Ley 454 de 1998, la economía solidaria es un sistema socioeconómico, cultural y ambiental que fomenta el desarrollo integral del ser humano 
          sin ánimo de lucro y en armonía con la naturaleza.
        </p>
        <p>
          El cuidado del medio ambiente implica un uso responsable de los recursos naturales, incorporando educación y conciencia ecológica, 
          para construir una economía más humana y solidaria.
        </p>
      </div>
    </div>

  </div>


    <a href="leccion0.php" class="btn btn-outline-secondary me-2"><i class="fa-solid fa-home me-1"></i> Inicio </a>
    <a href="?pagina=2" class="btn btn-outline-secondary"><i class="fa-solid fa-arrow-left me-1"></i> Anterior</a>
    <a href="leccion2.php" class="btn btn-success" target="_blank">Ir a Lección 2 <i class="fa-solid fa-arrow-right ms-1"></i></a>
  <?php endif; ?>



  



</div>





<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


