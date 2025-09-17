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
  <title>PESEM y Balance Social</title>
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
    
    <!-- Instructor -->
    <div class="text-center mb-4">
      <h1 class="fw-bold">Proyecto Educativo Socioempresarial (PESEM) y Balance Social</h1>
     <br>
    </div>

    <!-- PESEM -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <h2 class="card-title">Proyecto Educativo Socioempresarial (PESEM)</h2>
        <p>
          El <strong>Departamento Administrativo Nacional de Economía Solidaria (DANSOCIAL)</strong>, mediante la <strong>Directiva 031 de 2000</strong>, determinó el marco conceptual de la educación solidaria y proporcionó los parámetros para el <strong>Proyecto Educativo Socioempresarial (PESEM)</strong>, en el marco del plan estratégico solidario de la organización.
        </p>
        <p>
          Así mismo, la <strong>Ley 454 de 1998</strong> otorgó al DANSOCIAL la facultad de dirigir y coordinar la política estatal para la promoción, planeación, protección, fortalecimiento y desarrollo empresarial de las organizaciones de la economía solidaria, y así promover la educación solidaria, como también lo relacionado con la gestión socioempresarial para esta clase de entidades.
        </p>
        <p>
          Es una herramienta de gestión que genera un conjunto de procesos que permiten identificar, con todas y cada una de las personas y equipos de la organización, las necesidades de formación para facilitar mediante acciones educativas solidarias.
        </p>
        <p>
          Las acciones educativas se desarrollan en los <strong>cinco (5) ámbitos establecidos</strong>: Promoción, capacitación, formación, asistencia técnica e investigación; permitiendo lograr el desarrollo o fortalecimiento de los <strong>conocimientos, actitudes y habilidades</strong> para el mejor desempeño de la organización.
        </p>
      </div>
    </div>

    <!-- Subdivisiones PESEM -->
    <div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
      <div class="col">
        <div class="card h-100 border-primary shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-primary">Proyecto</h5>
            <p>♦ Establecer metas y diseñar procesos que soportan el desarrollo de las organizaciones solidarias.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 border-success shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-success">Educativo</h5>
            <p>♦ Tiene como objetivo el cambio de actitudes y conductas a través de procesos de investigación, promoción, formación, capacitación y asistencia técnica en el contexto del plan estratégico solidario de la organización.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 border-warning shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-warning">Social</h5>
            <p>♦ Se orienta hacia el mejoramiento del nivel de vida de la comunidad organizada.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 border-danger shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-danger">Empresarial</h5>
            <p>♦ Hace énfasis en la necesidad de mejorar los procesos de administración en cuanto a eficacia, calidad y competitividad.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Balance Social -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <h2 class="card-title">Balance Social</h2>
        <p>
          El <strong>Balance Social</strong> es el proceso de evaluación comparativo entre:  
        </p>
        <ul>
          <li><strong>Inventario inicial:</strong> talentos, capital social, alianzas estratégicas de la organización, necesidades de los asociados, sus familias y comunidad de entorno.</li>
          <li><strong>Proyectados:</strong> proyectos sociales, culturales, ambientales, políticos y educativos planeados para atender las necesidades más sentidas de la comunidad empresarial.</li>
        </ul>
        <p>
          Este cálculo se realiza mediante <strong>indicadores de logro</strong> que permiten medir el impacto de las acciones adelantadas frente a los temas de evaluación.
        </p>
      </div>
    </div>

    <!-- Balance Social Solidario -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <h3 class="card-title">Balance Social Solidario</h3>
        <p>
          El <strong>Balance Social Solidario</strong> es una herramienta de la gestión social de la entidad solidaria que permite:  
        </p>
        <ul>
          <li>Proyectar y verificar el cumplimiento del acuerdo cooperativo y solidario expresado en los servicios y auxilios diseñados para el mejoramiento de la calidad de vida de los asociados.</li>
          <li>Aplicar los principios cooperativos, garantizando la eficacia en la aplicación de la filosofía cooperativa.</li>
          <li>Rendir cuentas a los asociados.</li>
          <li>Mostrar el impacto en la comunidad y en la economía del país.</li>
        </ul>
        <p>
          El <strong>Balance Social Solidario</strong> es la medición del cumplimiento de los <strong>principios cooperativos</strong>, los cuales internacionalmente están definidos y se analizan uno a uno.
        </p>
      </div>
    </div>

    <!-- El Balance Social es -->
    <div class="card shadow">
      <div class="card-body">
        <h4 class="card-title">El Balance Social es:</h4>
        <ul>
          <li>Un instrumento de medición del impacto social de la cooperativa en su comunidad.</li>
          <li>Una evaluación de la relación entre los beneficios sociales y el éxito en los negocios.</li>
          <li>Una herramienta estratégica de evaluación sistemática.</li>
          <li>Un instrumento comunicacional.</li>
        </ul>
      </div>
    </div>
<br>
        <!-- Navegación -->
    <div class="d-flex justify-content-between">
      <a href="#" class="btn btn-outline-secondary">← Unidad Anterior</a>
    
      <a href="leccion12.php" class="btn btn-outline-primary">Siguiente Unidad</a>
    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
