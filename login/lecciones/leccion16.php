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
  <title>Aporte, Excedentes, lo Educativo y Socio Empresarial</title>
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
      <h1 class="fw-bold">Aporte, Excedentes, lo Educativo y Socio Empresarial</h1>
    </div>

    <!-- Card: Aportes Sociales -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="text-primary">Los aportes sociales</h3>
        <p>
          Cuando el asociado se vincula a la cooperativa realiza un aporte capital de la misma, denominado aporte social, 
          el cual pude ser satisfecho en dinero, trabajo o en especie, pero siempre se evalúa en pesos.
        </p>
        <p>
          Este aporte social convierte al asociado en copropietario de la cooperativa y por lo tanto le abre el derecho a utilizar 
          los servicios que la cooperativa presta y el derecho y deber de participar en la dirección y administración de la cooperativa.
        </p>
        <p>
          El estatuto de cada cooperativa establece cual es el aporte social mínimo que debe realizar cada individuo al asociarse 
          a la cooperativa y si debe o no realizar aporte social en forma permanente, a si como diferentes modalidades en las cuales 
          el aporte podrá ser satisfecho: en dinero, en especie o en trabajo.
        </p>
        <p>
          Los fondos y reservas de carácter permanente, las cooperativas deben tener por mandato de la ley, la reserva de protección 
          de los aportes sociales, el fondo de educación y el fondo de solidaridad, y además puede por decisión de la asamblea general, 
          crear otros fondos y reservas con fines determinados.
        </p>
      </div>
    </div>

    <!-- Card: Excedentes Cooperativos -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="text-success">Los excedentes cooperativos</h3>
        <p>
          Cuando del ejército anual resultan excedentes, se deben aplicar de la siguiente manera: En primer lugar, se deben compensar 
          pérdidas de ejercicios anteriores y restablecer la reserva de protección de aportes, si había sido utilizada.
        </p>
        <p>
          El sistema económico cooperativo se ha apartado de las practicas de la empresa tradicional con fines de lucro, no solo 
          atreves de los principios sobre adhesión y administración democrática, sino también por lo que concierne al destino y 
          distribución de los excedentes y otros beneficios financieros que las cooperativas eficientes proporcionan a sus asociados.
        </p>
        <p>
          El excedente cooperativo es en la terminología del movimiento cooperativo el mayor valor obtenido por una cooperativa 
          como fruto de su actividad.
        </p>
        <p>
          Se obtiene de hallar la diferencia de los ingresos y los costes de la actividad cooperativizada.
        </p>
        <p>
          Si la diferencia es positiva existe excedente cooperativo y los socios de la cooperativa tienen derecho a percibir 
          retornos cooperativos, una vez se han dotado los fondos de reserva legales y/o estatutarios.
        </p>

        <ul class="list-group my-3">
          <li class="list-group-item">20% Reserva de protección de aportes.</li>
          <li class="list-group-item">20% Fondo de educación.</li>
          <li class="list-group-item">10% Fondo de solidaridad.</li>
        </ul>

        <p>El otro 50% queda disposición de la asamblea y puede destinarse a:</p>
        <ul>
          <li>Revaloración de aportes sociales.</li>
          <li>Servicios comunes y de seguridad social.</li>
          <li>Retorno a los asociados, proporcional al uso de los servicios o a la participación en el trabajo.</li>
          <li>Fondo para amortización de aportes sociales.</li>
          <li>Otras reservas y fondos creados por la asamblea general.</li>
        </ul>

        <p class="mt-3">
          En general, allí donde están las necesidades, están las cooperativas.
        </p>
        <p>
          El balance social es un instrumento para reconocer en un momento dado, los logros obtenidos por la cooperativa en el campo 
          social de acuerdo a los estipulado en el plan social.
        </p>
        <p>
          En el balance social se presentan las soluciones a las necesidades de la base social de la cooperativa.
        </p>
      </div>
    </div>

    <!-- Card: Lo Educativo Socio Empresarial -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="text-secondary">Lo educativo socio empresarial</h3>
        <p>
          Las cooperativas deben construir y ejecutar un plan de desarrollo que de la calidad de sus asociados y de su entorno. 
          Este plan de desarrollo debe estar sustentado en un Proyecto Educativo Socio empresarial PESEMS, el cual consiste en el 
          planeamiento y desarrollo de actividades encaminadas a la investigación, promoción, formación, capacitación y asistencia técnica.
        </p>
        <p>
          Es educativo porque está orientado a fortalecer la práctica de valores de solidaridad, cooperación y ayuda mutua, con el fin 
          de generar actitudes y conductas que permitan consolidar un compromiso social frente a la misión que debe cumplir la cooperativa 
          como organización solidaria de conformidad con las previsiones de la ley 454 de 1998.
        </p>
        <p>
          Es socio empresarial porque, en armonía con lo anterior la educación solidaria busca consolidar proceso de autogestión empresarial 
          en la función del desarrollo sostenible de la calidad de vida de los asociados y de la comunidad en general.
        </p>
      </div>
 
    </div>
             <!-- Navegación -->
    <div class="d-flex justify-content-between">
      <a href="#" class="btn btn-outline-secondary">← Unidad Anterior</a>
    
      <a href="quiz.php" class="btn btn-outline-primary">Siguiente Unidad</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
