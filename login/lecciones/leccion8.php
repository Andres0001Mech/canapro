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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Estructura Orgánica y Administrativa - Parte 3</title>
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


  <div class="container my-5">
    <h1 class="text-center mb-4">Estructura Orgánica y Administrativa Parte 3</h1>

    <!-- Revisoría Fiscal -->
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <h2 class="card-title">La Revisoría Fiscal</h2>
        <p>La revisoría fiscal es una instancia de control de la organización, responsable especialmente de los aspectos económicos, contables y financieros.</p>
        <p>La revisoría fiscal da cuenta ante la asamblea general sobre cómo la contabilidad que lleva la organización refleja de manera fiel y actualizada su situación financiera real.</p>
        <p>De acuerdo con la declaración profesional N° 7 del Consejo Técnico de la Contaduría Pública, la revisoría fiscal es un órgano de fiscalización al que, en interés de la comunidad, bajo la dirección y responsabilidad del revisor fiscal, y con sujeción a las normas de auditoría generalmente aceptadas.</p>
        
        <h5 class="mt-3">Funciones De La Revisoría Fiscal</h5>
        <ul>
          <li>Controlar que las operaciones que celebre la organización se ajustan a las prescripciones de la ley, los estatutos y las decisiones de la asamblea general y del consejo de administración.</li>
          <li>Velar por que los libros de contabilidad de la entidad solidaria se encuentren al día y de acuerdo con el plan de cuentas establecido por la Superintendencia de la Economía Solidaria, como fuente de información para la toma de decisiones.</li>
          <li>Efectuar arqueos de los fondos de la organización cuando lo estime conveniente, levantando las actas respectivas.</li>
          <li>Firmar los estados financieros, informes y demás documentos de la cooperativa que sean de su competencia.</li>
          <li>Informar oportunamente a la asamblea general, al consejo de administración o a la gerencia, según cada caso, de las irregularidades halladas en el funcionamiento y en el desarrollo de las operaciones de la organización.</li>
          <li>Convocar a la asamblea general o al consejo de administración a reuniones extraordinarias cuando lo juzgue necesario.</li>
          <li>Velar por el cumplimiento de los requisitos que deben acreditar los candidatos a miembros de órganos de administración y control, en el momento de la inscripción de su candidatura para la elección.</li>
          <li>Colaborar con las entidades estatales de inspección y vigilancia y rendirles los informes que le sean solicitados.</li>
        </ul>
      </div>
    </div>

    <!-- Comités de Asesoría -->
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <h2 class="card-title">Los comités de asesoría</h2>
        <p><strong>¿Qué es un comité de asesoría?</strong></p>
        <p>La principal función del Comité Asesor consiste en analizar, evaluar la calidad. Estos comités constituyen importantes canales de participación de los asociados, de apoyo a las labores del consejo de administración en la organización de economía solidaria y una oportunidad que tienen los asociados de aportar sus conocimientos y habilidades para el beneficio colectivo.</p>
        <p>Son creados, reglamentados e integrados por el Consejo de Administración, para periodos que establece el mismo reglamento.</p>
        <p>A los demás comités como órganos de apoyo les corresponde facilitar la gestión de la empresa especializando sus actividades en educación, recreación, créditos, vivienda, divulgación e información, solidaridad y bienestar social, entre otros.</p>
        
        <h5 class="mt-3">Objetivos del Comité Asesor</h5>
        <p>Este grupo asesora, orienta, colabora y actualiza, por su experiencia, a nuestra organización sobre las necesidades, intereses y prioridades de servicio de las personas y sectores.</p>
      </div>
    </div>

    <!-- Comité de Educación -->
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <h2 class="card-title">Comité de educación</h2>
        <p><strong>¿Qué es un comité de educación?</strong></p>
        <p>Los comités de educación son órganos permanentes, formales, auxiliares. Las entidades de la economía solidaria y cooperativa están obligadas a realizar de modo permanente actividades que tiendan a la formación de sus asociados y trabajadores en los principios, métodos y características de la economía solidaria y del cooperativismo, así como para capacitar a los administradores en la gestión empresarial de cada organización.</p>
        <p>Los comités de educación son órganos permanentes, formales, auxiliares o de apoyo a las funciones de los consejos de administración o juntas directivas, en relación con el área de educación.</p>
        <p>Entre las funciones del Comité de Educación se destacan: Organizar todo tipo de actividades destinadas a la formación, actualización profesional de Asociados, sus directivos y empleados, tanto en lo técnico, ideológico.</p>
        
        <h5 class="mt-3">Funciones comité de educación</h5>
        <ul>
          <li>Designar de su seno un presidente y un secretario.</li>
          <li>Elaborar el Plan Anual de Educación, con su respectivo presupuesto y velar por la correcta ejecución del Fondo de Educación.</li>
          <li>Procurar que la prestación de los servicios de la organización para sus asociados se rija por los valores y los principios solidarios.</li>
          <li>Velar por la adecuada formación y capacitación de los asociados, dirigentes y trabajadores, procurando la actualización permanente en doctrina solidaria, en normatividad, en tecnología y demás asuntos de interés.</li>
          <li>Velar por que el desarrollo de los programas educativos se ejecute en el marco del Proyecto Educativo Socio-Empresarial, PESEM.</li>
          <li>Sugerir al Consejo y a la Administración la participación de dirigentes y asociados en actividades educativas ofrecidas por entidades cooperativas de integración.</li>
          <li>Homologar la formación acreditada por otras entidades cooperativas y de educación solidaria para los asociados de la organización.</li>
          <li>Diseñar políticas e instrumentos de comunicación del mensaje cooperativo y solidario para los asociados y para la comunidad entorno, e implementar medios virtuales o físicos que coadyuven con este propósito.</li>
        </ul>
      </div>
    </div>

    <!-- Comité de Solidaridad -->
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <h2 class="card-title">Comité de solidaridad</h2>
        <p>A los demás comités como órganos de apoyo les corresponde facilitar la gestión de la empresa especializando sus actividades en educación, recreación, créditos, vivienda, divulgación e información, solidaridad y bienestar social, entre otros.</p>

        <h5 class="mt-3">Funciones comité de solidaridad</h5>
        <ul>
          <li>Designar de su seno al presidente y al secretario.</li>
          <li>Proponer al consejo de administración o junta directiva, políticas de ayuda mutua y solidaridad y criterios para la evaluación de las situaciones de calamidad aducidas por los asociados, para asignar los recursos.</li>
          <li>Estudiar las solicitudes de auxilios por calamidad radicadas por los asociados y recomendar a la administración las soluciones, teniendo en cuenta el criterio de equidad y los recursos del fondo de solidaridad.</li>
          <li>Proponer al consejo de administración o junta directiva ajustes pertinentes al reglamento de solidaridad.</li>
          <li>Informar al consejo de administración sobre la gestión anual del comité y sobre la ejecución del fondo de solidaridad.</li>
        </ul>
      </div>
    </div>

    <!-- Estructura organizacional -->
    <div class="card mb-4 shadow-sm">
      <div class="card-body">
        <h2 class="card-title">Estructura organizacional de las principales organizaciones solidarias</h2>

        <h5 class="mt-3">Cooperativa</h5>
        <ul>
          <li>Órganos de Dirección: Asamblea y Consejo de Administración.</li>
          <li>Representante Legal: Gerente.</li>
          <li>Órganos de Control: Junta de Vigilancia y Revisor Fiscal. Los órganos de control podrán exonerar de revisor fiscal cuando las circunstancias economizas o de ubicación geográfica o el número de asociados lo justifiquen.</li>
          <li>Vigilancia: Superintendencia de Economía Solidaria y los Ministerios y Superintendencias según la actividad que desarrolle en su objeto social.</li>
        </ul>

        <h5 class="mt-3">Precooperativa</h5>
        <ul>
          <li>Órganos de Dirección: Junta de Asociados para entidades con más de diez asociados, Comité de Administración.</li>
          <li>Representante Legal: Director Ejecutivo.</li>
          <li>Órganos de Control: Junta (Comité de Vigilancia) y Revisor Fiscal. Los órganos de control podrán exonerar revisor fiscal cuando las circunstancias economizas o de ubicación geográfica o el número de asociados lo justifiquen.</li>
          <li>Vigilancia: Superintendencia de Economía Solidaria.</li>
        </ul>

        <h5 class="mt-3">Cooperativa de trabajo asociado</h5>
        <ul>
          <li>Órganos de Dirección: Asamblea y Consejo de Administración.</li>
          <li>Representante Legal: Gerente.</li>
          <li>Órganos de Control: Junta de Vigilancia y Revisor Fiscal.</li>
          <li>Vigilancia: Superintendencia de Economía Solidaria y Ministerio de Trabajo.</li>
        </ul>

        <h5 class="mt-3">Empresas de servicios en forma de administraciones públicas cooperativas</h5>
        <ul>
          <li>Órganos de Dirección: Asamblea General, Consejo de Administración y Gerente.</li>
          <li>Representante Legal: Gerente.</li>
          <li>Órganos de Control: Junta de Vigilancia y Revisor Fiscal.</li>
          <li>Vigilancia: Superintendencia de Economía.</li>
        </ul>

        <h5 class="mt-3">Fondo de empleados</h5>
        <ul>
          <li>Órganos de Dirección: Asamblea y Junta Directiva.</li>
          <li>Representante Legal: Gerente.</li>
          <li>Órganos de Control: Comité de Control Social y Revisor Fiscal.</li>
          <li>Vigilancia: Superintendencia de Economía Solidaria.</li>
        </ul>

        <h5 class="mt-3">Instituciones auxiliares de economía solidaria</h5>
        <ul>
          <li>Órganos de Dirección: Asamblea y Junta Directiva – Consejo de Administración.</li>
          <li>Representante Legal: Director Ejecutivo.</li>
          <li>Órganos de Control: Revisor Fiscal.</li>
          <li>Vigilancia: Superintendencia de Economía Solidaria.</li>
        </ul>

        <h5 class="mt-3">Mutuales</h5>
        <ul>
          <li>Órganos de Dirección: Asamblea y Junta Directiva.</li>
          <li>Representante Legal: Gerente o presidente de la Junta Directiva.</li>
          <li>Órganos de Control: Junta de Control Social y Revisor Fiscal.</li>
          <li>Vigilancia: Superintendencia de Economía Solidaria.</li>
        </ul>
      </div>
    </div>


    <!-- Navegación -->
    <div class="d-flex justify-content-between">
      <a href="#" class="btn btn-outline-secondary">← Unidad Anterior</a>
    
      <a href="leccion9.php" class="btn btn-outline-primary">Siguiente Unidad</a>
    </div>




  </div>

</body>
</html>
