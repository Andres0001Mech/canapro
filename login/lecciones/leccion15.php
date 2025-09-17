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
  <title>Fundamento, Estructura y Tipos de Cooperativas</title>
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

    <!-- Encabezado -->
    <div class="text-center mb-5">
      <h1 class="fw-bold">Fundamento, Estructura y Tipos de Cooperativas</h1>
      <h5 class="text-muted">Unidad Número 11</h5>
      <p class="mt-3">¡Bienvenido A la Unidad Número 11 FUNDAMENTOS, ESTRUCTURA Y CLASES DE COOPERATIVAS!</p>
    </div>

    <!-- Card: Introducción -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <p>
          La cooperativa como organización debe contar con un plan de desarrollo para alcanzar sus metas. 
          El proceso administrativo es realizado en cuatro etapas: planeación, organización, dirección y control, 
          las cuales en las cooperativas, se desarrollan de acuerdo con el principio de participación democrática de sus asociados.
        </p>
      </div>
    </div>

    <!-- Card: Administración Cooperativa -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="text-primary">La Administración Cooperativa</h3>
        <h5 class="mt-3">¿Qué es la Administración Cooperativa?</h5>
        <p>
          La Administración Cooperativa se caracteriza por complementar intereses y capacidades que fundamentan actividades conjuntas.  
          En la administración cooperativa, la participación de los asociados y la democracia son aspectos claves para su práctica.
        </p>
        <p>
          Las cooperativas modernas necesitan una administración destacada al frente, comprometida con la realización del propósito cooperativo, 
          guiada por los valores y principios cooperativos.
        </p>
        <p>
          La función principal de los gerentes es proveer liderazgo cooperativo para los asociados y líderes en el desarrollo de políticas 
          y estrategias que fortalezcan la cooperativa en la búsqueda de alcanzar el propósito cooperativo.
        </p>
        <p>
          Las cooperativas necesitan de un marco estable y comprensible para poder alcanzar sus metas y tomar decisiones.
        </p>
        <p>
          Este marco es la estructura organizacional, que establece un sistema de actividades que han de desarrollar los miembros de una cooperativa 
          para trabajar juntos de forma óptima y que se alcancen las metas fijadas en la planificación.
        </p>
        <p>
          En el organigrama se puede apreciar la estructura de la organización de una cooperativa, las líneas de autoridad y responsabilidad, 
          las funciones y las relaciones que existen entre las unidades orgánicas.
        </p>
      </div>
    </div>

    <!-- Card: Tipos de Cooperativas -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="text-success">Tipos de Cooperativas</h3>
        <p>
          La ley 79 de 1988 estipula las clases de cooperativas que pueden existir en razón del desarrollo de sus actividades, 
          y podrán ser especializadas, multiactivas e integrales.
        </p>
      </div>
    </div>

    <!-- Card: Especializadas -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h4 class="text-secondary">Cooperativas Especializadas</h4>
        <p>
          Cooperativas especializadas: Las que se organizan para atender una necesidad específica.
        </p>
        <p>
          Son aquellas que se han organizado para atender específicamente una necesidad, correspondiente a una sola rama de actividad económica, social o cultural.
        </p>
        <p>
          Tipos de Cooperativas Especializadas: Estas cooperativas podrán ofrecer servicios diferentes a los establecidos en su objeto social 
          (financieras, ahorro y crédito, aporte y crédito, transporte, vigilancia, agropecuarias, y pesqueras), mediante la suscripción de convenios con otras entidades cooperativas.
        </p>
      </div>
    </div>

    <!-- Card: Multiactivas -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h4 class="text-secondary">Cooperativas Multiactivas</h4>
        <p>
          Son aquellas que se organizan para atender varias necesidades, mediante la concurrencia de servicios en una sola entidad jurídica.
        </p>
      </div>
    </div>

    <!-- Card: Integrales -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h4 class="text-secondary">Cooperativas Integrales</h4>
        <p>
          Aquellas que en desarrollo de su objetivo social, realizan dos o más actividades complementarias entre sí.  
          Aquellas que en desarrollo de su objeto social, realicen dos o más actividades conexas y complementarias entre sí, 
          de producción, distribución, consumo y prestación de servicios.
        </p>
        <p>
          La Cooperativa Integral es un proyecto de autogestión en red que pretende paulatinamente juntar todos los elementos básicos de una economía 
          como son producción, consumo, financiación y moneda propia e integrar todos los sectores de actividad necesarios para vivir al margen del sistema capitalista.
        </p>
        <p>
          Consiste en una forma jurídica que nos permita construir un espacio de relaciones económicas autogestionadas entre los participantes, 
          que esté blindada contra los embargos privados o públicos y que minimice de manera totalmente legal, o al menos de forma no punible, 
          el pago de impuestos y seguridad social, protegiendo tanto como sea posible de la acción de la banca y del Estado.
        </p>
        <p>
          Así pues, es una forma jurídica legal de transición para permitirnos construir, desde el ámbito más local, una manera de vivir donde ni la banca ni el estado serán necesarias.  
          Legalmente se trata de una cooperativa mixta de servicios y de consumo.
        </p>
      </div>
    </div>
        <!-- Navegación -->
    <div class="d-flex justify-content-between">
      <a href="#" class="btn btn-outline-secondary">← Unidad Anterior</a>
    
      <a href="leccion16.php" class="btn btn-outline-primary">Siguiente Unidad</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
