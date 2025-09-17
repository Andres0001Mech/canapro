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
  <title>Unidad 5 - Características Económicas</title>
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
    <div class="text-center mb-4">
      <h1 class="fw-bold">Características Económicas</h1>
      <h5 class="text-muted">Unidad Número 5</h5>
    </div>

    <!-- Card Bienvenida -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h4 class="card-title text-primary">¡Bienvenido a la Unidad Número 5!</h4>
        <p class="card-text">
          En esta unidad exploraremos las <strong>características económicas, sociales y culturales</strong>
          relacionadas con la economía solidaria en Colombia.
        </p>
      </div>
    </div>

    <!-- Sección Economía Solidaria -->
    <div class="mb-4">
      <h3 class="fw-semibold">Características Económicas, Sociales y Culturales</h3>
      <p>
        Promueve la asociatividad, la cooperación y la autogestión.
        En Colombia la economía solidaria, definida en la <strong>Ley 454 de 1998</strong>, 
        se entiende como un sistema socioeconómico, cultural y ambiental conformado por formas
        asociativas identificadas por prácticas autogestionarias, solidarias, democráticas y humanistas.
      </p>
      <p>
        La economía solidaria prioriza la <strong>valorización del ser humano</strong> sobre el capital,
        fomentando la cooperación, la producción y el consumo de manera autogestionada,
        con el objetivo de lograr un desarrollo integral y sustentable.
      </p>
    </div>

    <!-- Sección ¿Qué es economía solidaria? -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h4 class="card-title text-success">¿Qué es la economía solidaria?</h4>
        <p>
          Es una forma de producción, consumo y distribución de riqueza que centra su atención en el ser humano,
          promoviendo valores como <strong>solidaridad, cooperación, ayuda mutua, reciprocidad, equidad</strong>
          y <strong>responsabilidad participativa</strong>.
        </p>
        <p>
          Se diferencia de la economía tradicional porque busca resolver necesidades humanas con respeto
          al medio ambiente, promoviendo justicia social y nuevas formas de organización económica.
        </p>
      </div>
    </div>

    <!-- Sección Orientación -->
    <div class="mb-4">
      <h4 class="fw-semibold">Orientación de la economía solidaria</h4>
      <ul class="list-group">
        <li class="list-group-item">Multidimensional: abarca lo social, económico, político, ecológico y cultural.</li>
        <li class="list-group-item">Busca un entorno justo, sustentable y democrático.</li>
        <li class="list-group-item">Promueve la emancipación de los trabajadores como sujetos históricos.</li>
      </ul>
    </div>

    <!-- Acordeón de características -->
    <div class="accordion mb-4" id="accordionEconomia">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
            Características de la economía solidaria (Ley 454 de 1998)
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionEconomia">
          <div class="accordion-body">
            <ul>
              <li>Organización como empresa con objeto social económico y comunitario.</li>
              <li>Vínculo asociativo basado en principios de solidaridad y cooperación.</li>
              <li>Ausencia de ánimo de lucro en sus estatutos.</li>
              <li>Igualdad de derechos y obligaciones para todos los miembros.</li>
              <li>Aportes sociales mínimos no reducibles durante su existencia.</li>
              <li>Integración social y económica con otras entidades solidarias.</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
            Obligaciones de las organizaciones solidarias
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionEconomia">
          <div class="accordion-body">
            <ul>
              <li>Establecer la irrepartibilidad de reservas sociales.</li>
              <li>En caso de liquidación, definir el destino del remanente patrimonial.</li>
              <li>Destinar excedentes a servicios sociales, reservas y fondos.</li>
              <li>Reintegrar excedentes a los asociados en proporción a su participación.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<!-- Navegación -->
<div class="d-flex justify-content-between align-items-center">
  <a href="#" class="btn btn-outline-secondary">← Unidad Anterior</a>

  <!-- Botón para marcar la unidad -->
  <button id="btnCompletar" class="btn btn-outline-success">Marcar esta Unidad Completa</button>

  <!-- Botón siguiente (oculto al inicio) -->
  <a id="btnSiguiente" href="leccion6.php" class="btn btn-outline-primary d-none">Siguiente →</a>
</div>

<!-- Script -->
<script>
  document.getElementById('btnCompletar').addEventListener('click', function() {
    // Ocultar el botón "Marcar esta unidad completa"
    this.classList.add('d-none');

    // Mostrar el botón "Siguiente"
    document.getElementById('btnSiguiente').classList.remove('d-none');
  });
</script>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
