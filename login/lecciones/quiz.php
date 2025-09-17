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
  <title>Bienvenido - Cuestionario Economía Solidaria</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #007bff, #00c6ff);
      min-height: 100vh;
      font-family: 'Inter', sans-serif;
      display: flex;
      flex-direction: column;
    }
    .main-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 40px 15px;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0px 10px 25px rgba(0,0,0,0.2);
      background: #fff;
      animation: fadeInUp 1s ease-in-out;
      max-width: 850px;
      width: 100%;
    }
    h1 {
      font-weight: 700;
      color: #007bff;
    }
    h4 {
      color: #6c757d;
      font-weight: 500;
    }
    p {
      text-align: justify;
      line-height: 1.6;
    }
    ul li {
      margin-bottom: 10px;
      font-size: 1rem;
    }
    ul li strong {
      color: #007bff;
    }
    .btn-custom {
      background: linear-gradient(90deg, #007bff, #00c6ff);
      border: none;
      color: #fff;
      font-weight: 600;
      border-radius: 8px;
      transition: all 0.3s ease-in-out;
    }
    .btn-custom:hover {
      background: linear-gradient(90deg, #0056b3, #0096c7);
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0, 123, 255, 0.4);
    }
    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

<div class="main-container">
  <div class="card p-4 text-center border-0">
    <div class="mb-3"> <br>
      <img src="../../images/canapro-cac-grande-h.png" 
           alt="Logo CANAPRO" width="280" class="mb-3 img-fluid">
    </div>
    <h1 class="mb-2">¡Bienvenido!</h1>
    <h4 class="mb-4">Cuestionario de Economía Solidaria</h4>
    
    <div class="text-start px-3">
      <h5 class="fw-bold mb-3">📌 Especificaciones</h5>
      <p>
        A continuación encontrará un Quiz relacionado con las lecciones anteriores. 
        Este formulario tiene un número limitado de intentos de aprobación. 
        Al finalizar podrá descargar su certificación. 
        Recuerde que si pierde los <strong>3 intentos</strong> deberá comunicarse con 
        el área de sistemas de CANAPRO C.AC. para su restablecimiento. 
        Cualquier duda puede ser resuelta a través de nuestros canales virtuales.
      </p>
<ul class="list-group list-group-flush">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <span>📊 Escala</span>
    <strong>0 – 100</strong>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <span>❓ Cada pregunta vale</span>
    <strong>2.0</strong>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <span>🎯 Porcentaje de aprobación</span>
    <strong>70%</strong>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <span>🔄 Intentos permitidos</span>
    <strong>3</strong>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <span>⏳ Tiempo límite</span>
    <strong>60 minutos</strong>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <span>📖 Estudio del tutorial</span>
    <strong>Libre</strong>
  </li>
</ul>

    </div>
    
    <a href="cuestionario.php" class="btn btn-lg mt-4 px-5 btn-custom">
      🚀 Iniciar Cuestionario
    </a>
    <br>
    <br>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
