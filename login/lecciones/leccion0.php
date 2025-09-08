<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] != 'estudiante') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bienvenido al Curso</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <div class="container-fluid">
    
    <!-- Logo -->
    <img src="/images/canapro-cac-grande-h.png" width="150" alt="Logo Canapro" class="me-3">

    <div class="d-flex">
      <!-- Usuario -->
      <span class="navbar-text text-dark me-3">
        <i class="fa-solid fa-user"></i> <?php echo $_SESSION['usuario']; ?>
      </span>

      <!-- Botón logout -->
      <a href="../logout.php" class="btn btn-outline-primary btn-sm d-flex align-items-center">
        <i class="fa-solid fa-right-from-bracket me-2"></i>
        <span>Cerrar sesión</span>
      </a>
    </div>
  </div>
</nav>



  <div class="container py-5">

    <!-- Encabezado -->
    <div class="text-center mb-5">
      <h1 class="fw-bold text-primary">
        <i class="fa-solid fa-people-group me-2"></i>
        Bienvenido al Curso Básico De Economía  Solidaria
      </h1>
      <p class="text-muted">Un espacio para aprender y fortalecer el trabajo colaborativo y solidario. 🤝</p>
    </div>

    <!-- Tarjeta de Bienvenida -->
    <div class="card shadow-sm border-0 rounded-3 mb-4">
      <div class="card-body text-center">
        <i class="fa-solid fa-hand-holding-heart fa-3x text-success mb-3"></i>
        <h3 class="card-title">¡Nos alegra que estés aquí!</h3>
        <p class="card-text">
          En este curso descubrirás los fundamentos de la economía solidaria, sus principios y cómo aplicarlos en tu vida y en tu comunidad.
        </p>
      </div>
    </div>

    <!-- Objetivos del curso -->
    <h4 class="mb-3">🎯 Objetivos del curso</h4>
    <ul class="list-group mb-5">
      <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Comprender los principios de la economía solidaria.</li>
      <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Reconocer experiencias y modelos solidarios.</li>
      <li class="list-group-item"><i class="fa-solid fa-check text-success me-2"></i> Promover la cooperación y el trabajo en equipo.</li>
    </ul>

    <!-- Módulos -->
    <h4 class="mb-3">📚 Módulos principales</h4>
    <div class="row g-3 mb-5">
      <div class="col-12 col-md-4">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body text-center">
            <i class="fa-solid fa-lightbulb fa-2x text-warning mb-2"></i>
            <h5 class="card-title">Introducción</h5>
            <p class="card-text">Conceptos básicos y origen de la economía solidaria.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body text-center">
            <i class="fa-solid fa-handshake fa-2x text-primary mb-2"></i>
            <h5 class="card-title">Principios</h5>
            <p class="card-text">Solidaridad, equidad, participación y sostenibilidad.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card shadow-sm border-0 h-100">
          <div class="card-body text-center">
            <i class="fa-solid fa-seedling fa-2x text-success mb-2"></i>
            <h5 class="card-title">Aplicaciones</h5>
            <p class="card-text">Ejemplos prácticos en comunidades y organizaciones.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Botón de inicio -->
    <div class="text-center">   
      <a href="leccion1.php" class="btn btn-lg btn-primary">
        <i class="fa-solid fa-play me-2"></i> Iniciar Curso
      </a>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
