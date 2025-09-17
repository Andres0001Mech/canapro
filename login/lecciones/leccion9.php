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
  <title>Marco Jurídico - Economía Solidaria</title>
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

    <!-- Título principal -->
    <div class="text-center mb-5">
      <h1 class="fw-bold">Marco jurídico de las Organizaciones de Economía Solidaria</h1>
      <p class="lead">¡Bienvenido A la Unidad Número 7, Marco Jurídico Organizaciones!</p>
    </div>

    <!-- Leyes generales -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Leyes y normas generales de la Economía Solidaria</h5>
      </div>
      <div class="card-body">
        <h6 class="fw-bold">Constitución Política de Colombia:</h6>
        <ul>
          <li><strong>Artículo 38:</strong> “Se garantiza el derecho de libre asociación para el desarrollo de las distintas actividades que las personas realizan en sociedad”.</li>
          <li><strong>Artículo 58:</strong> Función social y ecológica de la propiedad. “El estado protegerá y promoverá las formas asociativas y solidarias de propiedad”.</li>
          <li><strong>Artículo 333:</strong> “El Estado fortalecerá las organizaciones solidarias y estimulará el desarrollo empresarial”.</li>
        </ul>
        <p><strong>Ley 79 de 1988:</strong> Dotar al sector cooperativo de un marco propicio para su desarrollo.</p>
        <p><strong>Ley 454 de 1998:</strong> Determinar el marco conceptual de la Economía Solidaria, crear la SUPERSOLIDARIA, FOGACOOP y transformar el CONES.</p>
      </div>
    </div>

    <!-- Leyes específicas -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-success text-white">
        <h5 class="mb-0">Leyes de la Economía Solidaria</h5>
      </div>
      <div class="card-body">
        <p>Se basan mediante un número de mandatos estipulados, para garantizar un orden específico.</p>
        <h6 class="fw-bold">Sobre normas de contabilidad:</h6>
        <ul>
          <li>Circular Básica Contable y Financiera 004 de agosto del 2008</li>
          <li>Circular Básica Jurídica 06 del 2015</li>
        </ul>
      </div>
    </div>

    <!-- Organizaciones -->
    <div class="card mb-4 shadow-sm">
      <div class="card-header bg-dark text-white">
        <h5 class="mb-0">Normas por tipo de organización</h5>
      </div>
      <div class="card-body">

        <h6 class="fw-bold">Cooperativas</h6>
        <ul>
          <li>Ley 79 de 1988 y sus decretos reglamentarios</li>
          <li>Ley 454 de 1998</li>
          <li>Ley 222 de 1995</li>
          <li>Vigilancia: Superintendencia de Economía Solidaria</li>
        </ul>

        <h6 class="fw-bold">Precooperativas</h6>
        <ul>
          <li>Decreto 1333 de 1989</li>
          <li>Ley 79 de 1988 y decretos reglamentarios</li>
          <li>Decreto 4588 de 2006</li>
          <li>Vigilancia: Superintendencia de Economía Solidaria</li>
        </ul>

        <h6 class="fw-bold">Asociaciones mutuales</h6>
        <ul>
          <li>Decreto 1480</li>
          <li>Vigilancia: Superintendencia de Economía Solidaria</li>
        </ul>

        <h6 class="fw-bold">Fondos de empleados</h6>
        <ul>
          <li>Decreto 1481 de 1989</li>
          <li>Ley 1391 de 2010</li>
          <li>Ley 79 de 1988</li>
          <li>Vigilancia: Superintendencia de Economía Solidaria</li>
        </ul>

        <h6 class="fw-bold">Empresas de Servicios en forma de Administraciones Públicas Cooperativas</h6>
        <ul>
          <li>Decreto 1482</li>
          <li>Ley 79 de 1988</li>
        </ul>

        <h6 class="fw-bold">Cooperativas de trabajo asociado</h6>
        <ul>
          <li>Decreto 468 de 1990</li>
        </ul>

        <h6 class="fw-bold">Empresas comunitarias</h6>
        <ul>
          <li>Decreto 2073 de 1973</li>
          <li>Vigilancia: Superintendencia de Economía Solidaria y Ministerio de Agricultura y Desarrollo Rural</li>
        </ul>

        <h6 class="fw-bold">Empresas Solidarias de Salud</h6>
        <ul>
          <li>Ley 100 de 1993</li>
          <li>Ley 79 de 1988</li>
          <li>Decreto 4588 de 2006</li>
          <li>Vigilancia: Supersolidaria (organizacional) y Supersalud (funcional)</li>
        </ul>

        <h6 class="fw-bold">Organismos de Segundo y Tercer Grado</h6>
        <ul>
          <li>Ley 454 de 1998</li>
          <li>Vigilancia: Superintendencia de Economía Solidaria</li>
        </ul>

        <h6 class="fw-bold">Instituciones Auxiliares de la Economía Solidaria</h6>
        <ul>
          <li>Ley 79 de 1998</li>
          <li>Decreto 454 de 1998</li>
        </ul>

      </div>
    </div>
        <!-- Navegación -->
    <div class="d-flex justify-content-between">
      <a href="#" class="btn btn-outline-secondary">← Unidad Anterior</a>
    
      <a href="leccion10.php" class="btn btn-outline-primary">Siguiente Unidad</a>
    </div>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
