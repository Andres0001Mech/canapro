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



<?php
session_start();

// Si no hay sesión activa, redirigir al login
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

// Evitar caché en el navegador
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1
header("Pragma: no-cache"); // HTTP 1.0
header("Expires: 0"); // Proxies
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
<div class="container py-5">

  <!-- ENCABEZADO -->
  <div class="text-center mb-5">
    <h1 class="fw-bold text-primary"><i class="fa-solid fa-book-open me-2"></i>Lección 2 <br> CONTEXTO SOCIOECONÓMICO PARA EL DESARROLLO DE LA ECONOMÍA SOLIDARIA</h1>
    <p class="text-muted">Curso Básico de Economía Solidaria</p>
    <hr>
  </div>

  <!-- SECCIÓN 1 -->
  <div class="card shadow-sm mb-4">
    <div class="card-body">
      <h3 class="text-secondary"><i class="fa-solid fa-globe me-2"></i> ¿Qué es el contexto económico-social?</h3>
      <p>
        Estas definiciones nos permiten entender la noción de contexto social, la cual abarca todos los factores culturales, económicos e históricos.
        Actualmente, la globalización está ligada a un modelo político y económico neoliberal, basado en el consumo desmesurado, la acumulación y el individualismo.
      </p>
      <p>
        Esto genera un mundo injusto, desigual e insostenible, donde la discriminación, la falta de acceso a tecnologías y servicios básicos aumentan la brecha entre ricos y pobres.
      </p>
    </div>
  </div>

  <!-- BLOQUE EN DOS COLUMNAS -->
  <div class="row g-4 mb-4">
    <div class="col-md-6">
      <div class="card border-primary shadow-sm h-100">
        <div class="card-body">
          <h4 class="text-primary"><i class="fa-solid fa-users me-2"></i>Problemas actuales</h4>
          <ul>
            <li>Desigualdad y discriminación social</li>
            <li>Concentración de poder y riqueza</li>
            <li>Exclusión de mujeres, jóvenes y adultos mayores</li>
            <li>Brecha tecnológica y educativa</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card border-success shadow-sm h-100">
        <div class="card-body">
          <h4 class="text-success"><i class="fa-solid fa-seedling me-2"></i>Oportunidades</h4>
          <ul>
            <li>Acción colectiva y pensamiento crítico</li>
            <li>Economía solidaria como alternativa</li>
            <li>Prácticas sostenibles y humanas</li>
            <li>Transformación social y ambiental</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ACORDEÓN -->
  <div class="accordion mb-4" id="accordionLeccion">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
          <i class="fa-solid fa-leaf me-2"></i> Economía solidaria y medio ambiente
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show">
        <div class="accordion-body">
          <p>
            La economía neoliberal ha deteriorado el medio ambiente y generado una crisis ecológica global.  
            La <strong>Economía Solidaria</strong> propone un modelo responsable que proteja la naturaleza, fomente la sostenibilidad y conciba la naturaleza como fuente de vida y riqueza compartida.
          </p>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
          <i class="fa-solid fa-heart me-2"></i> Necesidades humanas fundamentales
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse">
        <div class="accordion-body">
          <p>
            Las necesidades humanas fundamentales son pocas y comunes en todas las culturas: subsistencia, protección, afecto, entendimiento, participación, ocio, creación, identidad y libertad.  
            Su satisfacción armónica es clave para un desarrollo sostenible y digno.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- SECCIÓN FINAL -->
  <div class="card shadow-sm mb-5">
    <div class="card-body">
      <h3 class="text-secondary"><i class="fa-solid fa-handshake-angle me-2"></i> ¿Por qué fomentar organizaciones solidarias?</h3>
      <p>
        Las <strong>organizaciones solidarias</strong> son iniciativas privadas con un gran impacto social.  
        Permiten unir esfuerzos para lograr objetivos comunes, fomentan la solidaridad, la igualdad y la justicia social.
      </p>
      <p>
        La Constitución Política de 1991 y la Ley 454 de 1998 respaldan su creación, garantizando el derecho de libre asociación y la promoción estatal de estas formas asociativas.
      </p>
      <div class="alert alert-info">
        <i class="fa-solid fa-circle-info me-2"></i>
        El desarrollo de la Economía Solidaria amplía la base productiva del país, permite a sectores vulnerables acceder a recursos y fomenta un mejor nivel de vida para las comunidades.
      </div>
    </div>
  </div>

  


   



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
<br>
  <!-- ================= PÁGINA 2 ================= -->
  <h2> Principios, Fines, Valores de la Economía Solidaria y Marco Normativo en Colombia</h2>


<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Lección – Principios de la Economía Solidaria</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <style>
    /* Estilos pequeños para pulir la visual */
    .hero {
      background: linear-gradient(90deg, rgba(13,110,253,0.06), rgba(25,135,84,0.03));
      border-left: 4px solid rgba(13,110,253,0.12);
    }
    .value-bullet {
      width: 44px;
      height: 44px;
      display: inline-grid;
      place-items:center;
      border-radius:8px;
      background: #f8f9fa;
      box-shadow: 0 1px 2px rgba(0,0,0,.03);
    }
    .content-card { min-height: 120px; }
    @media (max-width: 991px) {
      .sticky-col { position: static !important; top: auto; }
    }
  </style>
</head>
<body class="bg-light">

  <div class="container py-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div>
        <h1 class="h3 mb-0 text-primary"><i class="fa-solid fa-scale-balanced me-2"></i> Principios de la Economía Solidaria</h1>
        <small class="text-muted">Unidad: Valores, principios y marco normativo</small>
      </div>

    </div>

    <div class="row g-4">
      <!-- Main content -->
      <div class="col-lg-8">
        <!-- Intro / Hero -->
        <div class="card hero shadow-sm mb-4">
          <div class="card-body">
            <h4 class="card-title">¿Qué son los principios de la Economía Solidaria?</h4>
            <p class="mb-0 text-muted">
              Los principios que caracterizan a la economía solidaria incluyen igualdad, empleo, relación con el medio ambiente y cooperación.
              Ponen al ser humano, su trabajo y los mecanismos de cooperación por encima de los medios de producción.
            </p>
          </div>
        </div>

        <!-- Principios (lista) -->
        <div class="card shadow-sm mb-4">
          <div class="card-body">
            <h5 class="card-title text-warning"><i class="fa-solid fa-list-check me-2"></i> Principios destacados</h5>
            <div class="row gy-3">
              <div class="col-12">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Espíritu de solidaridad, cooperación, participación y ayuda mutua.</li>
                  <li class="list-group-item">Administración democrática, participativa, autogestionaria y emprendedora.</li>
                  <li class="list-group-item">Adhesión voluntaria, responsable y abierta.</li>
                  <li class="list-group-item">Propiedad asociativa y solidaria sobre los medios de producción.</li>
                  <li class="list-group-item">Participación económica de los asociados, en justicia y equidad.</li>
                  <li class="list-group-item">Formación e información continua y oportuna para los miembros.</li>
                  <li class="list-group-item">Autonomía, autodeterminación y autogobierno.</li>
                  <li class="list-group-item">Servicio a la comunidad e integración con otras organizaciones del sector.</li>
                  <li class="list-group-item">Promoción de la cultura ecológica.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Fines -->
        <div class="card shadow-sm mb-4">
          <div class="card-body">
            <h5 class="card-title text-primary"><i class="fa-solid fa-bullseye me-2"></i> Fines de la Economía Solidaria</h5>
            <ol class="mb-0">
              <li>Promover el desarrollo integral del ser humano.</li>
              <li>Generar prácticas que consoliden un pensamiento solidario, crítico, creativo y emprendedor.</li>
              <li>Contribuir al ejercicio y perfeccionamiento de la democracia participativa.</li>
              <li>Participar en el diseño y ejecución de planes y proyectos de desarrollo económico y social.</li>
              <li>Garantizar a los miembros participación en formación, trabajo, propiedad, información y distribución equitativa de beneficios (Ley 454/1998, Art. 5).</li>
            </ol>
          </div>
        </div>

        <!-- Valores -->
        <div class="card shadow-sm mb-4">
          <div class="card-body">
            <h5 class="card-title text-success"><i class="fa-solid fa-gem me-2"></i> Valores de la Economía Solidaria</h5>

            <div class="row g-3 mt-3">
              <!-- Each value -->
              <div class="col-6 col-md-4">
                <div class="d-flex align-items-start gap-3">
                  <div class="value-bullet"><i class="fa-solid fa-hands-heart text-danger"></i></div>
                  <div>
                    <div class="fw-bold">Ayuda</div>
                    <small class="text-muted">Acción solidaria hacia terceros</small>
                  </div>
                </div>
              </div>

              <div class="col-6 col-md-4">
                <div class="d-flex align-items-start gap-3">
                  <div class="value-bullet"><i class="fa-solid fa-landmark me-0 text-secondary"></i></div>
                  <div>
                    <div class="fw-bold">Democracia</div>
                    <small class="text-muted">Toma de decisiones participativa</small>
                  </div>
                </div>
              </div>

              <div class="col-6 col-md-4">
                <div class="d-flex align-items-start gap-3">
                  <div class="value-bullet"><i class="fa-solid fa-equals text-info"></i></div>
                  <div>
                    <div class="fw-bold">Igualdad</div>
                    <small class="text-muted">Trato justo para todos</small>
                  </div>
                </div>
              </div>

              <div class="col-6 col-md-4">
                <div class="d-flex align-items-start gap-3">
                  <div class="value-bullet"><i class="fa-solid fa-hands-clapping text-warning"></i></div>
                  <div>
                    <div class="fw-bold">Honestidad</div>
                    <small class="text-muted">Transparencia en el actuar</small>
                  </div>
                </div>
              </div>

              <div class="col-6 col-md-4">
                <div class="d-flex align-items-start gap-3">
                  <div class="value-bullet"><i class="fa-solid fa-handshake text-primary"></i></div>
                  <div>
                    <div class="fw-bold">Solidaridad</div>
                    <small class="text-muted">Apoyo mutuo y cooperación</small>
                  </div>
                </div>
              </div>

              <div class="col-6 col-md-4">
                <div class="d-flex align-items-start gap-3">
                  <div class="value-bullet"><i class="fa-solid fa-balance-scale text-success"></i></div>
                  <div>
                    <div class="fw-bold">Equidad</div>
                    <small class="text-muted">Distribución justa de beneficios</small>
                  </div>
                </div>
              </div>

              <div class="col-6 col-md-4">
                <div class="d-flex align-items-start gap-3">
                  <div class="value-bullet"><i class="fa-solid fa-eye-low-vision text-muted"></i></div>
                  <div>
                    <div class="fw-bold">Transparencia</div>
                    <small class="text-muted">Gestión clara y responsable</small>
                  </div>
                </div>
              </div>

              <div class="col-6 col-md-4">
                <div class="d-flex align-items-start gap-3">
                  <div class="value-bullet"><i class="fa-solid fa-check-circle text-secondary"></i></div>
                  <div>
                    <div class="fw-bold">Responsabilidad</div>
                    <small class="text-muted">Cumplimiento y compromiso</small>
                  </div>
                </div>
              </div>

              <div class="col-6 col-md-4">
                <div class="d-flex align-items-start gap-3">
                  <div class="value-bullet"><i class="fa-solid fa-hands-usd text-dark"></i></div>
                  <div>
                    <div class="fw-bold">Vocación social</div>
                    <small class="text-muted">Orientación al bien común</small>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <!-- Marco normativo -->
        <div class="card shadow-sm mb-4">
          <div class="card-body">
            <h5 class="card-title text-secondary"><i class="fa-solid fa-gavel me-2"></i> Marco normativo general (Colombia)</h5>
            <p class="mb-2 text-muted">Principales referencias:</p>

            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item"><strong>Constitución Nacional de 1991</strong> — Art. 38 (libre asociación), Art. 58 (función social y ecológica de la propiedad), Art. 333 (fomento a organizaciones solidarias).</li>
              <li class="list-group-item"><strong>Ley 454 de 1998</strong> — Define y regula la economía solidaria (Art. 5: derechos y objetivos).</li>
              <li class="list-group-item"><strong>Ley 79 de 1998</strong> y decretos reglamentarios relacionados.</li>
            </ul>

            <div class="accordion" id="normativaAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="normOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNormOne">
                    Decretos (ejemplos) y disposiciones
                  </button>
                </h2>
                <div id="collapseNormOne" class="accordion-collapse collapse" data-bs-parent="#normativaAccordion">
                  <div class="accordion-body">
                    <ul>
                      <li>Decreto 1333 de 1989 – Precooperativas.</li>
                      <li>Decreto 1480 de 1989 – Asociaciones mutualistas.</li>
                      <li>Decreto 1481 de 1989 – Fondos de empleados.</li>
                      <li>Decreto 1482 de 1989 – Administraciones públicas cooperativas.</li>
                      <li>Decreto 468 de 1990 – Cooperativas de trabajo asociado.</li>
                    </ul>
                    <p class="small text-muted mb-0">(Incluye otros decretos y reglamentaciones complementarias según la naturaleza de la organización).</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Recursos / cierre -->
        <div class="card shadow-sm mb-5">
          <div class="card-body">
            <h5 class="card-title"><i class="fa-solid fa-book-reader me-2"></i> Recursos y lectura recomendada</h5>
            <p class="mb-1">- Ley 454 de 1998 (texto completo)</p>
            <p class="mb-0">- Material didáctico sobre principios y valores (PDF)</p>
          </div>
        </div>

  
      </div>

      <!-- Sidebar / Índice -->
      <aside class="col-lg-4">
        <div class="sticky-col" style="top: 100px; position: sticky;">
          <div class="card shadow-sm mb-3">
            <div class="card-body">
              <h6 class="fw-bold">Contenido</h6>
              <nav class="nav flex-column">
                <a class="nav-link px-0" href="#principios">Principios</a>
                <a class="nav-link px-0" href="#fines">Fines</a>
                <a class="nav-link px-0" href="#valores">Valores</a>
                <a class="nav-link px-0" href="#marco">Marco normativo</a>
                <a class="nav-link px-0" href="#recursos">Recursos</a>
              </nav>
            </div>
          </div>

        </div>
      </aside>

    </div>
  </div>



  <a href="?pagina=1" class="btn btn-outline-secondary"><i class="fa-solid fa-arrow-left me-1"></i> Anterior</a>
  <a href="leccion3.php" class="btn btn-success" target="_blank">Ir a Lección 3 <i class="fa-solid fa-arrow-right ms-1"></i></a>


<?php else: ?>

  <!-- ================= PÁGINA DEFAULT ================= -->




<?php endif; ?>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
