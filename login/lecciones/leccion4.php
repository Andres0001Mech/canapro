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
  <title>Leccion N 4</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="bg-light">

<div class="container py-5">

<div class="container py-5">

  <!-- Encabezado -->
  <div class="text-center mb-5">
    <h1 class="fw-bold text-primary">Unidad 4: Antecedentes Históricos de las Organizaciones de Economía Solidaria</h1>
    <p class="lead text-muted">Descubre el origen del cooperativismo, su evolución en Colombia y el marco legal que lo respalda.</p>
    <img src="https://images.unsplash.com/photo-1533142266415-ac591a4c3b25?auto=format&fit=crop&w=1200&q=80" 
         class="img-fluid rounded shadow mt-3" alt="Historia del cooperativismo">
  </div>

  <!-- Qué es una cooperativa -->
  <section class="mb-5">
    <h2 class="text-success fw-bold">¿Qué es una cooperativa?</h2>
    <p>Una <strong>cooperativa</strong> es una <strong>asociación autónoma de personas</strong> unidas voluntariamente para formar una organización democrática.</p>
    <p>La economía solidaria surge a partir de las cooperativas que nacieron en las grandes industrias debido a la <strong>desigualdad social y necesidades de la clase obrera</strong>.</p>
    <p>En 1771, <strong>Robert Owen</strong> comenzó a trabajar para dar soluciones a la desigualdad social. Más tarde, en <strong>1844</strong>, nació la <strong>cooperativa de Rochdale</strong>, considerada el inicio del cooperativismo moderno.</p>
    <div class="alert alert-info mt-3">
      <i class="bi bi-lightbulb"></i> La experiencia de Rochdale enseñó que una cooperativa es una empresa donde <strong>todos son dueños</strong> y el éxito depende del trabajo en equipo y la administración responsable.
    </div>
  </section>

  <!-- Cooperativas en Colombia -->
  <section class="mb-5">
    <h2 class="text-success fw-bold">Las cooperativas en Colombia</h2>
    <p>En Colombia, el modelo cooperativo se integró oficialmente en <strong>1959</strong> con la creación de <strong>UCONAL</strong>. Sin embargo, desde tiempos ancestrales ya existían formas de trabajo solidario como:</p>

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-primary">MINGA</h5>
            <p class="card-text">Trabajo colectivo para obras o labores agrícolas que benefician a toda la comunidad.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-primary">CONVITE</h5>
            <p class="card-text">Sistema en el que todos trabajan en beneficio de un miembro del grupo.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-primary">MANO PRESTADA</h5>
            <p class="card-text">Un miembro trabaja en la tierra de otro y luego recibe la misma ayuda en su propia tierra.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-primary">FAEBA</h5>
            <p class="card-text">Obras de beneficio común donde cada miembro aporta jornadas de trabajo.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-primary">WAKI</h5>
            <p class="card-text">Cultivo colectivo donde las semillas son comunes y la cosecha se divide equitativamente.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title text-primary">PASANACU</h5>
            <p class="card-text">Fondo comunitario para atender calamidades graves, sostenido con aportes de todos.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Evolución Histórica -->
  <section class="mb-5">
    <h2 class="text-success fw-bold">Evolución del cooperativismo en Colombia</h2>
    <ul class="list-group shadow-sm">
      <li class="list-group-item">1841: Asociación Mutual La Caridad.</li>
      <li class="list-group-item">1899: Sociedades de Socorro Mutuo en Manizales, Bogotá y Cúcuta.</li>
      <li class="list-group-item">1931: Primera Ley Cooperativa (Ley 134).</li>
      <li class="list-group-item">1963: Decreto Ley 1598, nuevo marco legal.</li>
      <li class="list-group-item">1981: Creación del DANCOOP.</li>
      <li class="list-group-item">1998: Transformación en DANSOCIAL con la Ley 454.</li>
    </ul>
  </section>

  <!-- Marco legal -->
  <section class="mb-5">
    <h2 class="text-success fw-bold">Ley 454 de 1998</h2>
    <p>Con esta ley se establece el marco conceptual de la <strong>Economía Solidaria</strong> en Colombia:</p>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Transforma el Departamento de Cooperativas en <strong>DANSOCIAL</strong>.</li>
      <li class="list-group-item">Crea la <strong>Superintendencia de Economía Solidaria</strong>.</li>
      <li class="list-group-item">Crea el <strong>Fondo de Garantías</strong> para cooperativas financieras.</li>
      <li class="list-group-item">Regula la actividad financiera de las entidades cooperativas.</li>
    </ul>
    <div class="alert alert-success mt-3">
      <i class="bi bi-people-fill"></i> La economía solidaria busca un <strong>desarrollo integral del ser humano</strong>, con principios democráticos, solidarios y humanistas.
    </div>
  </section>

  <!-- Conclusión -->
  <section class="text-center">
    <h2 class="text-primary fw-bold">Conclusión</h2>
    <p class="fs-5">La economía solidaria en Colombia tiene raíces ancestrales y se consolidó con las cooperativas modernas. Hoy representa un sistema <strong>socioeconómico, cultural y ambiental</strong> que promueve la <strong>solidaridad, democracia y equidad</strong>.</p>
  
  </section>

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
<div class="container py-5">

  <!-- Encabezado -->
  <div class="text-center mb-5">
    <h1 class="fw-bold text-primary">Fondos de Empleados y Mutualismo</h1>
    <p class="lead text-muted">Historia, origen y evolución en Colombia.</p>
  </div>

  <!-- Sección: Qué es un Fondo de Empleados -->
  <section class="mb-5">
    <h2 class="text-success fw-bold">¿Qué es un fondo de empleados?</h2>
    <p>Los <strong>fondos de ahorro de empleados</strong> son empresas asociativas de derecho privado, sin ánimo de lucro, organizadas por trabajadores dependientes y subordinados.</p>
    <p>En 1967, la <strong>O.I.T.</strong> los catalogó como “Formas no Convencionales de Cooperación”. En Colombia, los primeros Fondos de Empleados surgieron en la década de 1930, como respuesta a las necesidades sociales de los trabajadores y el interés de los empleadores en fortalecer la ayuda mutua.</p>
    <div class="alert alert-info mt-3">
      <strong>Dato histórico:</strong> En 1989, el Decreto Ley 1481 otorgó un marco jurídico específico para los Fondos de Empleados en Colombia.
    </div>
  </section>

  <!-- Fondos de Empleados en Colombia -->
  <section class="mb-5">
    <h2 class="text-primary fw-bold">Fondos de empleados en Colombia</h2>
    <p>Hace cerca de 80 años, en Antioquia y otras regiones, se organizaron las denominadas <em>“natilleras”</em>, formas primarias de organización basadas en el ahorro programado.</p>
    <p>Posteriormente, evolucionaron hacia <strong>fondos de ahorro</strong> y finalmente en los Fondos de Empleados actuales. Inicialmente carecían de legislación propia, pero más tarde quedaron bajo la vigilancia de la Superintendencia Nacional de Cooperativas.</p>
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="card shadow h-100">
          <div class="card-body">
            <h5 class="card-title text-success">Situación inicial</h5>
            <p class="card-text">Funcionaban como corporaciones o asociaciones sujetas al código civil y dependían de personerías jurídicas del Ministerio de Gobierno.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-3 mt-md-0">
        <div class="card shadow h-100">
          <div class="card-body">
            <h5 class="card-title text-success">Cambio de control</h5>
            <p class="card-text">En 1963 quedaron bajo la vigilancia de la Superintendencia Nacional de Cooperativas, iniciando un proceso de cooperativización.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mutualismo -->
  <section class="mb-5">
    <h2 class="text-warning fw-bold">Antecedentes históricos de fondos mutuales</h2>
    <p>El <strong>mutualismo</strong>, también conocido como sociedades de ayuda mutua, es el sistema social más antiguo del mundo, basado en la cooperación y la protección recíproca.</p>
    <ul class="list-group mt-3">
      <li class="list-group-item">En la <strong>Babilonia antigua</strong>, existían sociedades de crédito para pequeños agricultores.</li>
      <li class="list-group-item">En la <strong>Edad Media</strong>, asociaciones en Italia administraban fondos comunes para servicios funerarios y subsidios.</li>
      <li class="list-group-item">Durante la <strong>Edad Moderna</strong>, en Europa las mutuales ayudaban a los más necesitados con programas sociales.</li>
    </ul>
  </section>

  <!-- Mutuales en Colombia -->
  <section class="mb-5">
    <h2 class="text-danger fw-bold">Mutuales en Colombia</h2>
    <p>Las mutuales llegaron a Colombia en <strong>1838</strong> con los misioneros españoles. En parroquias se organizaban fondos comunes con el fin de cubrir gastos funerarios y brindar ayuda mutua entre los más pobres.</p>
    <p>Ciudades como <strong>Bogotá, Rionegro y Medellín</strong> adoptaron este sistema, fortaleciendo la solidaridad comunitaria.</p>
  </section>

</div>

<div class="d-flex justify-content-between align-items-center my-4">

  <!-- Botón Anterior -->
  <a href="?pagina=1" class="btn btn-outline-secondary btn-lg shadow-sm px-4">
    <i class="fa-solid fa-arrow-left me-2"></i> Anterior
  </a>

  <!-- Botón Ir a Lección 5 -->
  <a href="foro.php" target="_blank" class="btn btn-success btn-lg shadow-sm px-4">
   Sección Foro <i class="fa-solid fa-arrow-right ms-2"></i>
  </a>

</div>
 


<?php else: ?>

  <!-- ================= PÁGINA DEFAULT ================= -->




<?php endif; ?>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
