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
  <title>Unidad 6 - Estructura Orgánica y Administrativa</title>
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
      <h1 class="fw-bold">Estructura Orgánica y Administrativa</h1>
      <h5 class="text-muted">Unidad Número 6 - Parte 1</h5>
    </div>

    <!-- Bienvenida -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h4 class="card-title text-primary">¡Bienvenido a la Unidad Número 6!</h4>
        <p class="card-text">
          En esta unidad conocerás cómo está conformada la estructura orgánica y administrativa de las organizaciones de economía solidaria.
        </p>
      </div>
    </div>

    <!-- Estructura -->
    <div class="mb-4">
      <h3 class="fw-semibold">Estructura de las organizaciones solidarias</h3>
      <ul class="list-group">
        <li class="list-group-item">La asamblea general de asociados o delegados</li>
        <li class="list-group-item">El consejo de administración, junta directiva o comité de administración</li>
        <li class="list-group-item">La gerencia, dirección ejecutiva o representación legal</li>
        <li class="list-group-item">La junta de vigilancia o comité de control social</li>
        <li class="list-group-item">La revisoría fiscal</li>
        <li class="list-group-item">Los comités de asesoría</li>
      </ul>
    </div>

    <!-- Acordeón Asamblea General -->
    <div class="accordion mb-4" id="accordionAsamblea">

      <!-- Qué es -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
            ¿Qué es la Asamblea General de Asociados?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionAsamblea">
          <div class="accordion-body">
            <p>
              Es el <strong>órgano supremo de autoridad</strong> de la Asociación y el máximo de administración en las organizaciones solidarias.  
              Sus decisiones son obligatorias para todos los asociados siempre que se adopten de conformidad con la ley, los reglamentos y los estatutos.
            </p>
            <p>
              En las precooperativas se denomina <strong>Junta de Asociados</strong>.  
              Puede ser de asociados o de delegados, dependiendo de la organización.
            </p>
          </div>
        </div>
      </div>

      <!-- Clases de asamblea -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
            Clases de Asamblea General
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionAsamblea">
          <div class="accordion-body">
            <ul class="list-group">
              <li class="list-group-item">
                <strong>Asamblea Ordinaria:</strong> Se celebra dentro de los 3 primeros meses del año (primer grado) o dentro de los 4 primeros meses (organismos de grado superior).
              </li>
              <li class="list-group-item">
                <strong>Asamblea Extraordinaria:</strong> Puede reunirse en cualquier momento para tratar asuntos urgentes que no pueden esperar a la ordinaria.
              </li>
              <li class="list-group-item">
                <strong>Asamblea de Delegados:</strong> Sustituye a la de asociados cuando es difícil reunir a todos por número, distancia o costos. Mínimo 20 delegados.
              </li>
              <li class="list-group-item">
                <strong>Asamblea de Asociados:</strong> Reunión de todos los asociados, con igualdad de voz y voto.  
                La primera reunión de constitución aprueba estatutos y elige órganos de administración y control.
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Funciones -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
            Funciones de la Asamblea General
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionAsamblea">
          <div class="accordion-body">
            <ul class="list-group">
              <li class="list-group-item">Establecer políticas y directrices generales.</li>
              <li class="list-group-item">Aprobar planes y programas de desarrollo.</li>
              <li class="list-group-item">Expedir su reglamento.</li>
              <li class="list-group-item">Reformar los estatutos.</li>
              <li class="list-group-item">Examinar informes de administración, control y vigilancia.</li>
              <li class="list-group-item">Aprobar estados financieros.</li>
              <li class="list-group-item">Destinar excedentes conforme a la ley.</li>
              <li class="list-group-item">Fijar aportes o contribuciones extraordinarios.</li>
              <li class="list-group-item">Elegir miembros del consejo de administración, junta directiva o comité de administración.</li>
              <li class="list-group-item">Elegir miembros de vigilancia o control social.</li>
              <li class="list-group-item">Elegir revisor fiscal y suplente.</li>
              <li class="list-group-item">Dirimir conflictos entre órganos de administración.</li>
              <li class="list-group-item">Aplicar sanciones a miembros de órganos.</li>
              <li class="list-group-item">Decidir sobre transformación, fusión, escisión, disolución y liquidación.</li>
              <li class="list-group-item">Interpretar de modo obligatorio el estatuto.</li>
              <li class="list-group-item">Cumplir demás funciones señaladas en leyes y estatutos.</li>
            </ul>
          </div>
        </div>
      </div>

    </div>

    <!-- Navegación -->
    <div class="d-flex justify-content-between">
      <a href="#" class="btn btn-outline-secondary">← Unidad Anterior</a>
    
      <a href="leccion7.php" class="btn btn-outline-primary">Siguiente Unidad</a>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
    