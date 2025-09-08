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
  <title>Lección – Curso Economía Solidaria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="bg-light">

<div class="container py-5">

<?php if ($pagina === 1): ?>

  <!-- ================= PÁGINA 1 ================= -->

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


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Unidad 3 – Organizaciones de Economía Solidaria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="bg-light">

<div class="container py-5">

  <!-- Encabezado -->
  <div class="text-center mb-5">
    <h1 class="fw-bold text-primary">¡Bienvenido a la Unidad 3!</h1>
    <h3 class="text-secondary">TIPOS DE ORGANIZACIONES DE ECONOMÍA SOLIDARIA</h3>
    <p class="lead mt-3">Explora las diferentes formas de organización solidaria en Colombia, sus características y su aporte a la sociedad.</p>
  </div>

  <!-- Sección de resumen -->
  <div class="row text-center mb-5">
    <div class="col-md-4">
      <div class="card border-0 shadow h-100">
        <div class="card-body">
          <i class="fa-solid fa-handshake-angle fa-3x text-primary mb-3"></i>
          <h5 class="fw-bold">Cooperación</h5>
          <p class="text-muted">Las organizaciones solidarias buscan el beneficio colectivo y no el lucro individual.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-0 shadow h-100">
        <div class="card-body">
          <i class="fa-solid fa-users fa-3x text-success mb-3"></i>
          <h5 class="fw-bold">Participación</h5>
          <p class="text-muted">La gestión democrática permite que todos los asociados tengan voz y voto.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card border-0 shadow h-100">
        <div class="card-body">
          <i class="fa-solid fa-seedling fa-3x text-warning mb-3"></i>
          <h5 class="fw-bold">Desarrollo</h5>
          <p class="text-muted">Promueven el progreso económico, social y cultural de sus comunidades.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Listado general -->
  <div class="card shadow mb-4">
    <div class="card-header bg-primary text-white">
      <h5 class="mb-0"><i class="fa-solid fa-users me-2"></i> Organizaciones de Economía Solidaria</h5>
    </div>
    <div class="card-body">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Pre cooperativas</li>
        <li class="list-group-item">Cooperativas</li>
        <li class="list-group-item">Instituciones auxiliares de la economía solidaria</li>
        <li class="list-group-item">Empresas asociativas de trabajo</li>
        <li class="list-group-item">Empresas comunitarias</li>
        <li class="list-group-item">Empresas de servicios en administraciones públicas cooperativas</li>
        <li class="list-group-item">Empresas solidarias de salud</li>
        <li class="list-group-item">Mutuales</li>
        <li class="list-group-item">Fondos de empleados</li>
        <li class="list-group-item">Organismos de segundo y tercer grado</li>
        <li class="list-group-item">Otras que cumplan con la Ley 454 de 1998</li>
      </ul>
    </div>
  </div>

  <!-- Organizaciones de desarrollo -->
  <div class="card shadow mb-4">
    <div class="card-header bg-success text-white">
      <h5 class="mb-0"><i class="fa-solid fa-seedling me-2"></i> Organizaciones Solidarias de Desarrollo</h5>
    </div>
    <div class="card-body">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Asociaciones sin ánimo de lucro</li>
        <li class="list-group-item">Fundaciones</li>
        <li class="list-group-item">Corporaciones civiles sin ánimo de lucro</li>
        <li class="list-group-item">Organizaciones de acción comunal</li>
        <li class="list-group-item">Organizaciones de voluntariado (Defensa Civil, bomberos, etc.)</li>
        <li class="list-group-item">Organizaciones étnicas de emprendimiento</li>
        <li class="list-group-item">Redes de colaboración solidaria</li>
      </ul>
    </div>
  </div>

  <!-- Acordeón detallado -->
  <div class="accordion shadow mb-5" id="accordionExample">
    <!-- (tu contenido de acordeón que ya tienes va aquí, no lo borro para no alargar) -->
  </div>

  <!-- Video -->
  <div class="container my-5">
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
      <div class="ratio ratio-16x9">
        <iframe 
          src="https://www.youtube.com/embed/AvRrbOF-Cz0?si=kzXc2S8Rg-b9dLlv" 
          title="Video: Organizaciones de Economía Solidaria"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
          referrerpolicy="strict-origin-when-cross-origin" 
          allowfullscreen>
        </iframe>
      </div>
      <div class="card-body text-center bg-light">
        <h5 class="card-title fw-bold text-primary">Organizaciones de Economía Solidaria</h5>
        <p class="card-text text-muted">Aprende más sobre las organizaciones de economía solidaria a través de este video explicativo.</p>
        <a href="https://www.youtube.com/watch?v=AvRrbOF-Cz0" target="_blank" class="btn btn-outline-primary">
          <i class="fa-brands fa-youtube me-2"></i> Ver en YouTube
        </a>
      </div>
    </div>
  </div>

  <!-- Cita motivacional -->
  <div class="bg-light p-5 rounded shadow-sm text-center mb-5">
    <blockquote class="blockquote">
      <p class="mb-3">"La economía solidaria no busca la riqueza individual, sino el bienestar colectivo."</p>
      <footer class="blockquote-footer">Ley 454 de 1998</footer>
    </blockquote>
  </div>



</div>

  
  <a href="leccion0.php" class="btn btn-outline-secondary me-2"><i class="fa-solid fa-home me-1"></i> Inicio</a>
  <a href="?pagina=2" class="btn btn-primary">Siguiente <i class="fa-solid fa-arrow-right ms-1"></i></a>


<!-- ================= PÁGINA 2 ================= -->
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
<br>
  <!-- ================= PÁGINA 2 ================= -->
  <h2> Principios, Fines, Valores de la Economía Solidaria y Marco Normativo en Colombia</h2>

<div class="container py-5">

  <!-- Encabezado -->
  <div class="text-center mb-5">
    <h1 class="fw-bold text-primary">Organizaciones Solidarias de Desarrollo</h1>
    <p class="lead text-muted">Son organizaciones del sector solidario cuya característica común es que ejercen la solidaridad principalmente de adentro hacia fuera.</p>
  </div>

  <!-- Acordeón de contenidos -->
  <div class="accordion shadow" id="accordionSolidarias">

    <!-- Asociación -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingAsociacion">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAsociacion" aria-expanded="true" aria-controls="collapseAsociacion">
          <i class="fa-solid fa-people-group me-2 text-primary"></i> Asociación
        </button>
      </h2>
      <div id="collapseAsociacion" class="accordion-collapse collapse show" aria-labelledby="headingAsociacion" data-bs-parent="#accordionSolidarias">
        <div class="accordion-body">
          <p>Es una organización constituida sin ánimo de lucro por tres o más personas.</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Realización de un fin común lícito, de interés general o particular.</li>
            <li class="list-group-item">No exige patrimonio definido al constituirse.</li>
            <li class="list-group-item">La afectación del patrimonio es irrevocable.</li>
            <li class="list-group-item">Vigencia determinada en años.</li>
            <li class="list-group-item">Puede disolverse por voluntad de los asociados.</li>
            <li class="list-group-item">Objeto flexible según voluntad de los asociados.</li>
            <li class="list-group-item">Se requiere un número plural de personas.</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Corporación -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingCorporacion">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCorporacion" aria-expanded="false" aria-controls="collapseCorporacion">
          <i class="fa-solid fa-users-between-lines me-2 text-success"></i> Corporación
        </button>
      </h2>
      <div id="collapseCorporacion" class="accordion-collapse collapse" aria-labelledby="headingCorporacion" data-bs-parent="#accordionSolidarias">
        <div class="accordion-body">
          <p>Reunión de individuos con el objeto de promover el bienestar de sus asociados (físico, intelectual y moral). No busca lucro.</p>
          <p><strong>Diferencia con la Asociación:</strong> protege actividades comunes a sus miembros, por lo que su carácter es más restringido y cerrado.</p>
        </div>
      </div>
    </div>

    <!-- Fundación -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFundacion">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFundacion" aria-expanded="false" aria-controls="collapseFundacion">
          <i class="fa-solid fa-hand-holding-heart me-2 text-danger"></i> Fundación
        </button>
      </h2>
      <div id="collapseFundacion" class="accordion-collapse collapse" aria-labelledby="headingFundacion" data-bs-parent="#accordionSolidarias">
        <div class="accordion-body">
          <p>Entidad sin ánimo de lucro con un patrimonio afectado de manera irrevocable para fines de interés general.</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Patrimonio definido desde su origen.</li>
            <li class="list-group-item">Vigencia indefinida.</li>
            <li class="list-group-item">Solo puede disolverse por causales de ley.</li>
            <li class="list-group-item">Objeto y naturaleza fijados desde el acto de fundación.</li>
            <li class="list-group-item">Puede ser creada por una sola persona.</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- ONG -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingONG">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseONG" aria-expanded="false" aria-controls="collapseONG">
          <i class="fa-solid fa-earth-americas me-2 text-warning"></i> ONG’s
        </button>
      </h2>
      <div id="collapseONG" class="accordion-collapse collapse" aria-labelledby="headingONG" data-bs-parent="#accordionSolidarias">
        <div class="accordion-body">
          <p>No existe como término en la normatividad colombiana. Surge en la ONU. Son organizaciones privadas sin ánimo de lucro que producen bienes y servicios de uso social.</p>
        </div>
      </div>
    </div>

    <!-- Juntas de acción comunal -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingJAC">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJAC" aria-expanded="false" aria-controls="collapseJAC">
          <i class="fa-solid fa-people-roof me-2 text-info"></i> Juntas de Acción Comunal
        </button>
      </h2>
      <div id="collapseJAC" class="accordion-collapse collapse" aria-labelledby="headingJAC" data-bs-parent="#accordionSolidarias">
        <div class="accordion-body">
          <p>Organización cívica, social y comunitaria sin ánimo de lucro, con personería jurídica y patrimonio propio.</p>
          <p><strong>Integración:</strong> mínimo 9 miembros representando sectores como mujeres, jóvenes, trabajadores, comerciantes, economía solidaria, educación, cultura, deporte, etc.</p>
        </div>
      </div>
    </div>

    <!-- Organizaciones de voluntariado -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingVoluntariado">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVoluntariado" aria-expanded="false" aria-controls="collapseVoluntariado">
          <i class="fa-solid fa-hands-helping me-2 text-secondary"></i> Organizaciones de Voluntariado
        </button>
      </h2>
      <div id="collapseVoluntariado" class="accordion-collapse collapse" aria-labelledby="headingVoluntariado" data-bs-parent="#accordionSolidarias">
        <div class="accordion-body">
          <p>Iniciativa social, privada y sin ánimo de lucro. Trabajan con voluntarios en favor de intereses colectivos.</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Detectar necesidades sociales y sus causas.</li>
            <li class="list-group-item">Denunciar violaciones a derechos humanos y sociales.</li>
            <li class="list-group-item">Generar espacios de diálogo y resolución de conflictos.</li>
            <li class="list-group-item">Fomentar democracia y participación ciudadana.</li>
            <li class="list-group-item">Recordar al Estado sus responsabilidades sociales.</li>
            <li class="list-group-item">Promover una cultura de solidaridad.</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Redes de colaboración solidaria -->
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingRedes">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRedes" aria-expanded="false" aria-controls="collapseRedes">
          <i class="fa-solid fa-network-wired me-2 text-dark"></i> Redes de Colaboración Solidaria
        </button>
      </h2>
      <div id="collapseRedes" class="accordion-collapse collapse" aria-labelledby="headingRedes" data-bs-parent="#accordionSolidarias">
        <div class="accordion-body">
          <p>Basadas en la teoría de la complejidad, promueven integración, sinergia y transformación colectiva.</p>
          <p><strong>Objetivo:</strong> articular solidariamente cadenas productivas.</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Producir dentro de la red lo que se consume.</li>
            <li class="list-group-item">Corregir flujos de valores para evitar dependencia capitalista.</li>
            <li class="list-group-item">Generar empleo y distribuir ingresos.</li>
            <li class="list-group-item">Reinvertir excedentes colectivamente para bienestar común.</li>
            <li class="list-group-item">Impulsar organizaciones étnicas de emprendimiento.</li>
          </ul>
        </div>
      </div>
    </div>

  </div>

  <!-- Frase motivacional -->
  <div class="bg-light p-5 rounded shadow-sm text-center mt-5">
    <blockquote class="blockquote">
      <p class="mb-3">"La verdadera fuerza de las organizaciones solidarias está en la unión y el compromiso colectivo."</p>
      <footer class="blockquote-footer">Principios de la Economía Solidaria</footer>
    </blockquote>
  </div>

</div>


  <a href="?pagina=1" class="btn btn-outline-secondary"><i class="fa-solid fa-arrow-left me-1"></i> Anterior</a>
  <a href="leccion4.php" class="btn btn-success" target="_blank">Ir a Lección 4 <i class="fa-solid fa-arrow-right ms-1"></i></a>


<?php else: ?>

  <!-- ================= PÁGINA DEFAULT ================= -->




<?php endif; ?>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
