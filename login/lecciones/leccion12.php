<?php
session_start();

// Regenerar ID de sesión para mayor seguridad
session_regenerate_id(true);

// Verificar autenticación y rol
if (
    !isset($_SESSION['usuario']) || 
    !isset($_SESSION['rol']) || 
    $_SESSION['rol'] !== 'estudiante'
) {
    header("Location: login.php");
    exit();
}

// Sanitizar parámetro 'pagina' desde la URL
$pagina = filter_input(INPUT_GET, 'pagina', FILTER_VALIDATE_INT);
if ($pagina === false || $pagina === null || $pagina < 1) {
    $pagina = 1;
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orientación Estatutos y Legalización</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
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
        <i class="fa-solid fa-right-from-bracket me-2"></i>Cerrar sesión &nbsp;
      </a>
    </div>
  </div>
</nav>

  <div class="container py-5">
    
    <!-- Título principal -->
    <div class="text-center mb-4">
      <h1 class="fw-bold">Orientación para la Elaboración de Estatutos, Reglamentos y Legalización de la Organización</h1>
    </div>

    <!-- Introducción -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <p>
          Es una herramienta construida por todas las personas que están interesadas en la creación de la organización y son de consulta al momento de tomar decisiones en la parte administrativa, económica y social y debe ser el fruto del acuerdo solidario, para lo cual se deben tener en cuenta los siguientes puntos:
        </p>
        <p>
          El estatuto es el compendio de normas y procedimientos por los cuales se rigen los asociados de una organización solidaria.
        </p>
        <p>
          El estatuto es la carta de navegación de la empresa solidaria, y debe estar dividido en capítulos y estos a su vez en artículos así:
        </p>
      </div>
    </div>

    <!-- Artículos -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <h2 class="h4">Artículos</h2>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Capítulo I. Razón Social, naturaleza, domicilio, ámbito territorial y duración.</li>
          <li class="list-group-item">Capítulo II. Del acuerdo solidario, objeto social y actividades.</li>
          <li class="list-group-item">Capítulo III. De los asociados.</li>
          <li class="list-group-item">Capítulo IV. De los órganos de administración y control.</li>
          <li class="list-group-item">Capítulo V. Sede principal y Oficinas.</li>
          <li class="list-group-item">Capítulo VI. Comités y comisiones de apoyo.</li>
          <li class="list-group-item">Capítulo VII. Del régimen económico.</li>
          <li class="list-group-item">Capítulo VIII. De la fusión, transformación, incorporación, escisión, disolución y liquidación de la entidad solidaria.</li>
          <li class="list-group-item">Capítulo IX. Del régimen disciplinario.</li>
          <li class="list-group-item">Capítulo X. Procedimiento para la reforma de estatutos.</li>
          <li class="list-group-item">Capítulo XI. Disposiciones finales.</li>
        </ul>
      </div>
    </div>

    <!-- Trámites para legalizar -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <h2 class="h4">Trámites para legalizar una organización de economía solidaria</h2>

        <!-- Primer paso -->
        <h5 class="mt-3">Primer paso</h5>
        <ul>
          <li>Conformar el grupo de fundadores.</li>
          <li>Nombrar un comité organizador.</li>
          <li>Participar en los cursos de inducción.</li>
          <li>Definir la forma asociativa que convenga a su actividad e intereses.</li>
          <li>Participar en el curso básico (20 horas), para obtener la certificación de la unidad administrativa especial de organizaciones solidarias o la entidad acreditada para tal fin.</li>
          <li>Elaborar el estatuto de la entidad, acta de aportes y acta de asamblea.</li>
        </ul>

        <!-- Segundo paso -->
        <h5 class="mt-3">Segundo paso</h5>
        <ul>
          <li>Convocar la asamblea de constitución.</li>
          <li>Realizar la asamblea y en ella elegir los órganos de dirección y control.</li>
          <li>Firma de actas de constitución, aportes y aceptación de cargos.</li>
        </ul>

        <!-- Tercer paso -->
        <h5 class="mt-3">Tercer paso</h5>
        <ul>
          <li>Registrar la entidad ante la cámara de comercio, en ese mismo acto se obtiene el NIT para efectos tributarios.</li>
          <li>Formulario de datos básicos de la cámara de comercio debidamente diligenciado.</li>
          <li>Acta de constitución, aportes y aceptación de cargos suscritas por el presidente y secretario de la asamblea.</li>
          <li>Copia de estatutos firmada por los(as) asociado(as) y por el presidente y secretario de la asamblea.</li>
        </ul>

        <!-- Cuarto paso -->
        <h5 class="mt-3">Cuarto paso</h5>
        <p><strong>Control de legalidad:</strong> se tramita ante la superintendencia respectiva.</p>
        <ul>
          <li>Las cooperativas de ahorro y crédito, multiactivas, integrales, ante la Superintendencia de la Economía Solidaria.</li>
          <li>Las de trabajo asociado además ante el Ministerio de la Protección Social para registrar los regímenes de trabajo y compensaciones.</li>
          <li>Las demás organizaciones según su actividad económica con la superintendencia respectiva (ejemplo: salud en la Superintendencia de Salud, transporte en la Superintendencia de Transporte).</li>
          <li>Las asociaciones mutuales: Superintendencia de Economía Solidaria, de la misma forma que los Fondos.</li>
        </ul>
      </div>
    </div>
        <!-- Navegación -->
    <div class="d-flex justify-content-between">
      <a href="#" class="btn btn-outline-secondary">← Unidad Anterior</a>
    
      <a href="leccion13.php" class="btn btn-outline-primary">Siguiente Unidad</a>
    </div>  
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
