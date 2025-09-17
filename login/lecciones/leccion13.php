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
  <title>Conceptos del Cooperativismo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
      <h1 class="fw-bold">Conceptos del Cooperativismo</h1>
      <h5 class="text-muted">Unidad Número 8 - Conceptos y orígenes del cooperativismo</h5>
    </div>

    <!-- Sección: El término cooperativismo -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="card-title text-primary">El término cooperativismo</h3>
        <p class="card-text">
          El cooperativismo tiene unas reglas mediante las cuales se logra la organización de grupos humanos y se desarrolla actitudes cooperativas para que cada grupo organizado logre sus propósitos.
        </p>
        <p class="card-text">
          El cooperativismo tiene como base el esfuerzo colectivo, la solidaridad y ayuda mutua, establece una serie de principios que conducen a un nuevo estilo de relaciones sociales y a una nueva forma de organización social.
        </p>
        <h5 class="mt-3">COOPERATIVISMO:</h5>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">♦ Esfuerzo Colectivo</li>
          <li class="list-group-item">♦ Solidaridad</li>
          <li class="list-group-item">♦ Ayuda Mutua</li>
        </ul>
      </div>
    </div>

    <!-- Sección: Origen del cooperativismo -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="card-title text-success">Origen del cooperativismo</h3>
        <p>
          Cooperación es la acción mancomunada de personas, conducente a la realización de objetivos que son base de su agrupación.
        </p>
        <p>
          Históricamente la cooperación es un hecho que se ha manifestado en todas las funciones sociales y en todos los procesos de cultura universal.
        </p>
        <p>
          Mediante ella, el hombre se asocia con sus semejantes para satisfacer sus necesidades uno a otro de manera recíproca, resolver sus problemas comunes y ayudarse mutuamente con otros de manera que, trabajando unidos y organizados les sea más fácil alcanzar sus propósitos y deseos.
        </p>
        <p>
          El cooperativismo surge como gran alternativa, la filosofía de trabajo solidario, ayuda mutua y la primacía del hombre. Fue en el año de 1844, en donde 27 hombres y una mujer fundaron la primera Cooperativa en el poblado de Rochdale.
        </p>
      </div>
    </div>

    <!-- Sección: Doctrina -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="card-title text-warning">Doctrina</h3>
        <p>
          En este sentido, la doctrina de la cooperación pretende darles a los cooperadores una visión distinta del mundo, para que a través de su acción, transformen el sistema.
        </p>
        <blockquote class="blockquote">
          <p>“El cooperativismo son unas gafas que nos permiten ver las cosas de una manera diferente, de una forma mucho más amplia e incluyente”.</p>
        </blockquote>
        <p>
          Recuerde, es necesario que la doctrina tenga un contenido y un instructivo. El primero trata de los principios y valores cooperativos, los cuales estudiaremos en las próximas lecciones.
        </p>
        <p>
          Un instrumento está dado por las formas asociativas de cooperación, a través de las cuales se pretende transformar el sistema socioeconómico vigente. 
          <strong>“Nuestro instrumento son las diferentes maneras de asociarnos que tenemos”.</strong>
        </p>

        <h5 class="mt-3">DOCTRINA</h5>
        <p><strong>Contenido:</strong> Valores y principios cooperativos</p>
        <p><strong>Instructivo:</strong></p>

        <h5 class="mt-3">La doctrina cooperativa</h5>
        <p>
          El pensamiento cooperativo constituye un tipo de concepción en relación con el hombre y la realidad en la que se desenvuelve. 
          La doctrina cooperativa es, entonces, la interpretación de los hechos y fenómenos que se dan en la cooperación.
        </p>
      </div>
    </div>
        <!-- Navegación -->
    <div class="d-flex justify-content-between">
      <a href="#" class="btn btn-outline-secondary">← Unidad Anterior</a>
    
      <a href="leccion14.php" class="btn btn-outline-primary">Siguiente Unidad</a>
    </div>  
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
