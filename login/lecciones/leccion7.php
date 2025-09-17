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
  <title>Unidad 6 - Estructura Orgánica Administrativa Parte 2</title>
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
      <h5 class="text-muted">Unidad Número 6 - Parte 2</h5>
    </div>

    <!-- Consejo de Administración -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="card-title text-primary">Consejo de administración</h3>
        <p>
          El consejo de administración es el órgano permanente de administración de la Organización solidaria, subordinado a las directrices y políticas de la asamblea general. El consejo, junto con la gerencia de la entidad, garantiza la implementación de los planes y programas definidos por la asamblea general, y la buena administración de los recursos.
        </p>
        <p>
          El número de integrantes (que debe ser impar), el período de ejercicio del mandato, las causales de remoción y sus funciones deben fijarse en el estatuto, que podrá consagrar la renovación parcial de sus miembros en cada asamblea.
        </p>
      </div>
    </div>

    <!-- Funciones del consejo -->
    <div class="accordion mb-4" id="accordionConsejo">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#funcionesConsejo">
            Funciones del consejo de administración
          </button>
        </h2>
        <div id="funcionesConsejo" class="accordion-collapse collapse show" data-bs-parent="#accordionConsejo">
          <div class="accordion-body">
            <ol>
              <li>Implementar y desarrollar la dirección estratégica, los planes y los programas aprobados por la asamblea general.</li>
              <li>Decidir sobre la estructura administrativa, la organización interna, establecer los cargos, las funciones y la remuneración de los colaboradores (trabajadores) de la organización solidaria.</li>
              <li>Nombrar el gerente o representante legal.</li>
              <li>Decidir sobre el ingreso y el retiro de asociados, de acuerdo con las disposiciones estatutarias.</li>
              <li>Expedir los reglamentos de los servicios, fondos y demás actividades de la organización.</li>
              <li>Establecer su propio reglamento.</li>
              <li>Crear los comités asesores que considere necesarios, entre ellos los de Educación y Solidaridad, nombrar sus integrantes y expedir los reglamentos con sus funciones.</li>
              <li>Propiciar y coordinar los procesos de planificación participativa para la elaboración del plan estratégico que será presentado a la asamblea general para su aprobación.</li>
              <li>Convocar la asamblea general.</li>
              <li>Autorizar la vinculación de la entidad a organismos de segundo grado de la economía solidaria.</li>
              <li>Rendir a la asamblea anual el informe de labores, presentar para su aprobación los estados financieros del año anterior y el proyecto de distribución de los excedentes del ejercicio.</li>
              <li>Las funciones no asignadas en forma explícita por la ley o el estatuto a otros organismos de la entidad.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Gerencia -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="card-title text-success">La gerencia, la dirección ejecutiva o la representación legal</h3>
        <p>
          La gerencia es el órgano responsable de la ejecución de los planes, programas y políticas definidas por la asamblea general y por el consejo de administración, la junta directiva o comité de administración de las organizaciones de economía solidaria.
        </p>
      </div>
    </div>

    <!-- Funciones de la gerencia -->
    <div class="accordion mb-4" id="accordionGerencia">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#funcionesGerencia">
            Funciones de la gerencia
          </button>
        </h2>
        <div id="funcionesGerencia" class="accordion-collapse collapse show" data-bs-parent="#accordionGerencia">
          <div class="accordion-body">
            <ol>
              <li>Ejercer la representación legal de la organización.</li>
              <li>Ejecutar las políticas y decisiones adoptadas por el consejo de administración.</li>
              <li>Ejercer la representación legal de la organización.</li>
              <li>Planear, organizar, coordinar y supervisar las actividades operativas y de administración.</li>
              <li>Nombrar y contratar el personal administrativo y operativo, de acuerdo con la planta y la nómina aprobadas por el consejo de administración.</li>
              <li>Velar por la formación del personal administrativo y operativo, incentivar su desempeño, y remover el personal cuando sea del caso.</li>
              <li>Establecer y mantener las relaciones y las comunicaciones con los órganos de administración y control, con los asociados, los proveedores, los usuarios de los servicios, con los órganos estatales de fomento y vigilancia, y con terceros.</li>
              <li>Celebrar los contratos y realizar las operaciones del giro ordinario de la organización.</li>
              <li>Elaborar el presupuesto anual y presentarlo al consejo de administración para su aprobación.</li>
              <li>Ordenar los gastos de acuerdo con el presupuesto.</li>
              <li>Enviar oportunamente los informes regulares y los solicitados por las entidades estatales de fomento y control.</li>
              <li>Preparar y presentar al consejo de administración proyectos de nuevos servicios y su reglamentación.</li>
              <li>Gestionar y realizar negociaciones de financiamiento y programas de asistencia técnica, dentro de la órbita de sus atribuciones de contratación.</li>
              <li>Velar por la correcta gestión de la contabilidad como base para el análisis actualizado y para la gestión financiera de la organización solidaria. Dirigir las relaciones públicas y las comunicaciones de la entidad, procurando que los asociados y demás grupos de interés reciban información oportuna sobre los servicios y la proyección de la organización.</li>
              <li>Presentar al consejo de administración informes periódicos sobre la gestión gerencial y la marcha de la entidad.</li>
              <li>Las demás contempladas en el estatuto o asignadas por el consejo de administración.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Junta de vigilancia -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="card-title text-danger">La junta de vigilancia o el comité de control social</h3>
        <p>
          La junta de vigilancia, o comité de control social, o comité de vigilancia, según el tipo de organización de economía solidaria de que se trate, es el órgano encargado del control social, integrado por asociados hábiles, en número no mayor a tres (3) con sus respectivos suplentes, cuyo período y causales de remoción se fijan en el estatuto de la cooperativa.
        </p>
      </div>
    </div>

    <!-- Funciones de la junta -->
    <div class="accordion mb-4" id="accordionJunta">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#funcionesJunta">
            Funciones de la junta de vigilancia
          </button>
        </h2>
        <div id="funcionesJunta" class="accordion-collapse collapse show" data-bs-parent="#accordionJunta">
          <div class="accordion-body">
            <ul>
              <li>Velar por el cumplimiento de los requisitos que deben acreditar los candidatos a miembros de los órganos de administración y control en el momento de inscribir su postulación.</li>
              <li>Velar por el cumplimiento de los requisitos y las instancias previstas en los estatutos y reglamentos para la aprobación de solicitudes de servicios, especialmente tratándose de crédito, cuando provengan de miembros de órganos de administración y control.</li>
              <li>Vigilar la estricta aplicación del régimen de incompatibilidades previsto en la Ley 454 de 1998 en sus artículos 60 y 61, para los miembros del consejo de administración, de la junta de vigilancia y los representantes legales, así como también las contenidas en el estatuto y reglamentos de la organización.</li>
              <li>Las demás funciones que le asigne la ley o los estatutos, siempre y cuando se refieran al control social y no correspondan a funciones propias de la auditoría interna o revisoría fiscal, salvo en aquellas organizaciones eximidas de revisor fiscal.</li>
              <li>Velar por que los actos de los órganos de administración se ajusten a las prescripciones legales, estatutarias y reglamentarias y en especial a los principios de la economía solidaria.</li>
              <li>Informar a los órganos de administración, al revisor fiscal y a la Superintendencia de la Economía Solidaria, sobre las irregularidades y conflictos de interés que existan en el funcionamiento de la entidad y presentar recomendaciones sobre las medidas que en su concepto deben adoptarse.</li>
              <li>Conocer los reclamos que presenten los asociados en relación con la prestación de los servicios, transmitirlos y solicitar los correctivos por el conducto regular y con la debida oportunidad.</li>
              <li>Hacer llamadas de atención a los asociados cuando incumplan los deberes consagrados en la ley, los estatutos y los reglamentos.</li>
              <li>Solicitar la aplicación de sanciones a los asociados cuando haya lugar a ello, y velar por que el órgano competente se ajuste a procedimientos establecidos para el efecto.</li>
              <li>Verificar la lista de asociados hábiles e inhábiles para poder participar en las asambleas o para elegir delegados.</li>
              <li>Rendir informes sobre sus actividades a la asamblea general ordinaria.</li>
              <li>Velar por que el órgano competente se ajuste al procedimiento establecido en la aplicación de las sanciones a los asociados y garantice para ellos el debido proceso.</li>
              <li>Desarrollar sus funciones con criterios de investigación y valoración, con observaciones y requerimientos debidamente documentados.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <!-- Navegación -->
    <div class="d-flex justify-content-between">
      <a href="#" class="btn btn-outline-secondary">← Unidad Anterior</a>
    
      <a href="leccion8.php" class="btn btn-outline-primary">Siguiente Unidad</a>
    </div>



  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
