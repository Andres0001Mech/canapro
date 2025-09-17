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
  <title>Orígenes del Cooperativismo</title>
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
      <h1 class="fw-bold">Orígenes del Cooperativismo</h1>
      <h5 class="text-muted">Precursores del Cooperativismo</h5>
    </div>

    <!-- Tarjeta introductoria -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <p>Robert Owen fue un empresario filántropo y socialista utópico británico.</p>
        <p>William King fue un geólogo británico, profesor de Geología y Mineralogía.</p>
        <p>Charles Fourier fue un socialista utópico francés de la primera parte del siglo XIX y uno de los padres del cooperativismo.</p>
        <blockquote class="blockquote">“Precursores Del Cooperativismo”</blockquote>
      </div>
    </div>

    <!-- Los Precursores -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="text-primary">Los Precursores</h3>
        <p>
          A lo largo de la historia del cooperativismo, las ideas y las relaciones se encuentran muchas veces, algunos hombres preocupados por la interpretación de la vida y por las interpretaciones filosóficas que se originaban en el continuo contacto con las comunidades, los pensamientos y lo movimientos desarrollaron una ideología que luego se convirtió en doctrina con un objetivo en el horizonte humano: personas que vivían su doctrina.
        </p>
      </div>
    </div>

    <!-- Siglo XVII -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="text-success">El Siglo XVII</h3>
        <h5>John Bellers</h5>
        <p>
          John Bellers era un teórico educativo inglés y cuáquero, autor de Propuestas para crear una escuela de industria de todos los oficios y cría útiles.  
          En el siglo XVII aparecen dos precursores del cooperativismo: Plockboy y Ballers cuyas ideas habrían de tener innegable repercusión en el desarrollo cooperativista posterior.
        </p>
        <p>
          El primero de ellos, llamado el patriarca de la cooperación, publicó en 1659 el ensayo que emprendía su doctrina; el segundo en 1695, hizo una exposición de su doctrina en el trabajo titulado: proposiciones para la ejecución de una asociación de trabajo de todas las industrias útiles y de agricultura.
        </p>
        <p>
          Fue uno de los primeros en poner de relieve el principio de la cooperación. En 1695 expuso un plan de producción en régimen cooperativo basado en la propiedad colectiva de los medios de producción y en la organización racional del trabajo.
        </p>
        <h6>Un poco sobre John Bellers</h6>
        <p>
          Nacido en Inglaterra, economista, filántropo; uno de los precursores de la teoría del trabajo como fuente del valor. En contraposición a los mercantilistas, Bellers subrayaba la necesidad de elevar el rendimiento del trabajo y de transformar el modo de producción existente.  
          Fue uno de los primeros en poner de relieve el principio de la cooperación.  
          En sus <em>Proposiciones sobre la institución del Colegio de la Producción</em> (1695) expuso un plan de producción en régimen cooperativo basado en la propiedad colectiva de los medios de producción y en la organización racional del trabajo según el lema de “quien no trabaja no come”.  
          Bellers subrayaba la necesidad de los seguros sociales y de la educación por el trabajo.
        </p>
        <hr>
        <h5>Peter Cornelius Plockboy</h5>
        <p>
          Uno de los precursores del cooperativismo moderno.  
          Plockboy y el cuaquerismo son los precursores del cooperativismo moderno.  
          Las cooperativas son sociedades económicas para la “salvación de los pobres”. Su utilización por la política las desvirtúa, haciéndolas perder su carácter universal.
        </p>
        <p>
          P.C. Plockboy, nacido en Holanda en 1620, se instaló en Inglaterra, donde tomó contacto con el reformismo religioso protestante de los grupos iniciáticos que seguían la línea comunitarista de George Fox.  
          Este, considerado como fundador de los cuáqueros, había nacido en 1624 en el Condado de Leicester, y aunque de familia humilde había tenido una esmerada educación religiosa, estando incluso a punto de seguir los estudios para sacerdote.
        </p>
        <p>
          Su personal interpretación de la Biblia le llevó a disidir de la línea oficial de la Iglesia de Inglaterra, y como manifestó en público sus opiniones fue denunciado por blasfemia y encarcelado en 1650.
        </p>
      </div>
    </div>

    <!-- Siglo XIX -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="text-danger">Siglo XIX</h3>
        <p>
          En Inglaterra del siglo XIX Robert Owen, considerado el padre de la corporación inglesa, de la corporación moderna en general y del cooperativismo autodidacta industrial, afortunado innovador de técnicas y sistemas sociales, es a su vez, el precursor de las cooperativas de producción y de trabajo.
        </p>
        <p>
          Por la misma época en Francia, Charles Fourier impulsó una idea de ver el trabajo del cual tenían que vivir los hombres como un verdadero placer o deporte que fuera en sí mismo atractivo y agradable, además de beneficioso en sus resultados, para lo cual propuso la asociación de personas en colonias autónomas.
        </p>
        <hr>
        <h4>Francia</h4>
        <p>
          También en Francia, Philipe Buchez y Louis Blanc contribuyeron a desarrollar y popularizar las cooperativas obreras en producción, con la aspiración de que los trabajadores establecieran organizaciones autónomas, dirigidas por ellos mismos, eligiendo a sus propios conductores y repartiendo los excedentes mediante un grupo de reglas que aseguran la equidad y la provisión adecuada para mantener el capital y hacer nuevas inversiones.
        </p>
        <h6>Philippe Buchez</h6>
        <p>
          Nacido el 31 de marzo de 1796 en Matagne-la-Petite y fallecido el 11 de agosto de 1865 en Rodez, fue un político, historiador y sociólogo sansimoniano francés.
        </p>
        <h6>Luis Blanc</h6>
        <p>
          Louis Jean Joseph Charles Blanc fue un político e historiador socialista francés y masón. Se le considera uno de los precursores de la socialdemocracia.
        </p>
      </div>
    </div>

    <!-- Cooperativas de Consumo -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h3 class="text-warning">Cooperativas de Consumo</h3>
        <p>
          William King y Michel Derrion, expositores de ideas y realizadores de ellas.  
          King y Derrion, vinculados también a la época en la cual el sistema de cooperación se consolidaba, fueron expositores de ideas y realizadores de ellas principalmente de cooperativas de consumo.
        </p>
        <p>
          Los principales aportes de los precursores de la cooperación moderna están en el hecho de haber concebido la idea de la asociación, basándose en el principio de la armonía para la vida, y en proyectar la cooperación a partir de la organización de los intereses del trabajo y no de los intereses del capital.
        </p>
        <p>
          Una cooperativa de consumo es un tipo de cooperativa cuyo fin es el de satisfacer las necesidades de sus socios, como la compra conjunta de determinados productos, la prestación de servicios personales.
        </p>
        <p>
          En el caso de las cooperativas de consumo consciente, los objetivos específicos son consumir productos ecológicos, locales, pagando un precio justo en origen y reduciendo la cadena de intermediarios.  
          Alguien puede pensar que sólo sirven para comprar más barato.
        </p>
      </div>
    </div>
        <!-- Navegación -->
    <div class="d-flex justify-content-between">
      <a href="#" class="btn btn-outline-secondary">← Unidad Anterior</a>
    
      <a href="leccion15.php" class="btn btn-outline-primary">Siguiente Unidad</a>
    </div>  
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
