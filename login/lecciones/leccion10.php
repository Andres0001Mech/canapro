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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fundamentos Administrativos de la Organización</title>
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

  <div class="container my-5">

    <!-- Encabezado -->
    <div class="text-center mb-5">
      <h1 class="fw-bold">Fundamentos administrativos de la organización</h1>
    </div>

    <!-- Sección 1 -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-primary text-white">
        <h5 class="mb-0">¿Qué son fundamentos administrativos?</h5>
      </div>
      <div class="card-body">
        <p><strong>Métodos de administración acordes con los valores de la igualdad</strong></p>
        <p>Las organizaciones de economía solidaria desarrollan métodos de administración acordes con los valores de la igualdad, la participación, la democracia y la autogestión.</p>
        <p>En la administración se sigue un proceso que consta de cuatro pasos: la planeación, la organización, la dirección (incluye la ejecución) y el control (incluye la evaluación).</p>
        <p>El proceso administrativo es dinámico y requiere, desde el comienzo, una comunicación plena y eficaz entre todos los actores de la organización.</p>
        <p>Si en la empresa solidaria los asociados participan activamente en la formulación de sus objetivos, en la organización del trabajo y en el control de sus resultados, la administración tendrá el éxito esperado.</p>
        <p><strong>Fundamentos de la organización y sus principales elementos:</strong> El objetivo inmediato y fundamental de una organización es producir bienes o servicios. Para ser eficiente, la producción debe basarse en la división del trabajo, que consiste en descomponer un proceso complejo en una serie de pequeñas tareas.</p>
      </div>
    </div>

    <!-- Sección 2 -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-success text-white">
        <h5 class="mb-0">El proceso administrativo</h5>
      </div>
      <div class="card-body">
        <p><strong>Proceso Administrativo:</strong> El procedimiento administrativo​ es una causa formal de una serie de actos.</p>
        <ul>
          <li><strong>Dirección:</strong> Dirigir es coordinar con liderazgo. Las personas ejecutan las actividades bajo su responsabilidad mediante su convicción propia y su conciencia de responsabilidad compartida. En las organizaciones solidarias es clave la autogestión para optimizar los resultados en beneficio de todos.</li>
          <li><strong>Organización:</strong> La empresa asociativa organiza la estructura administrativa, asignando funciones y responsabilidades a los órganos colegiados y a sus integrantes. Todo encaminado al logro de las metas y objetivos, y alineado con la visión y la misión.</li>
          <li><strong>Planeación:</strong> Se proyecta la organización hacia el futuro. Se plantean objetivos de corto, mediano y largo plazo en dimensiones económica, cultural, social, ambiental y política. Se formula la dirección estratégica: visión, misión, políticas y estrategias.</li>
          <li><strong>Control:</strong> Consiste en atender el correcto desempeño. En casos necesarios, advertir desviaciones y sugerir acciones correctivas. En las organizaciones solidarias, el control social lo ejercen órganos de vigilancia y el control económico lo realiza la revisoría fiscal, reportando a la Asamblea.</li>
        </ul>
      </div>
    </div>

    <!-- Sección 3 -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-dark text-white">
        <h5 class="mb-0">La gestión de las organizaciones solidarias</h5>
      </div>
      <div class="card-body">
        <p>La gestión de las organizaciones solidarias es más compleja de lo que suele pensarse...</p>
        <p>El rol de la educación es central porque fortalece tanto a las instituciones como a los asociados, sus familias, la comunidad y la sociedad en general.</p>
        <p>Además, contribuye al tejido social, integración comunitaria y movilidad social con una visión común: el desarrollo de la solidaridad.</p>
      </div>
    </div>

    <!-- Sección 4 -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-info text-white">
        <h5 class="mb-0">Características de las empresas de economía solidaria</h5>
      </div>
      <div class="card-body">
        <ul>
          <li>Legalmente constituidas.</li>
          <li>Ejercen una actividad económica.</li>
          <li>Parten de una asociación.</li>
          <li>Buscan el bienestar de asociados y comunidad.</li>
          <li>Fomentan valores de autoayuda, responsabilidad, igualdad, equidad, solidaridad, honestidad, transparencia y vocación social.</li>
          <li>Ingresos como medio para actividades sociales.</li>
          <li>Irrepartibilidad de reservas sociales.</li>
          <li>Principio de identidad entre asociados y trabajadores/consumidores.</li>
        </ul>
        <p>Otra característica afín es su adhesión voluntaria a valores que exaltan al ser humano como sujeto y fin de la actividad económica...</p>
        <p>El principio de identidad alinea intereses entre asociados como propietarios, usuarios o trabajadores.</p>
        <p>La especificidad cooperativa permite diferenciarlas de otras organizaciones en cualquier país.</p>
      </div>
    </div>

    <!-- Sección 5 -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-warning text-dark">
        <h5 class="mb-0">Enfoque social y ambiental</h5>
      </div>
      <div class="card-body">
        <p>La priorización de sus operaciones está enfocada hacia la igualdad, equidad y transparencia. Muchos proyectos nacieron en sectores productivos beneficiosos para el medio ambiente, fomentando reciclaje, reutilización y agricultura ecológica.</p>
        <p>También surgieron en comunidades golpeadas por crisis económicas y exclusión social, dando cabida a mujeres y jóvenes.</p>
        <p>Hoy, en todo el mundo, existen miles de emprendimientos solidarios que desarrollan actividades productivas y sociales.</p>
        <p>Las Empresas de Inserción son estructuras que facilitan el acceso posterior al empleo normalizado a colectivos vulnerables, con acompañamiento socio-laboral.</p>
      </div>
    </div>
        <!-- Navegación -->
    <div class="d-flex justify-content-between">
      <a href="#" class="btn btn-outline-secondary">← Unidad Anterior</a>
    
      <a href="leccion11.php" class="btn btn-outline-primary">Siguiente Unidad</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
