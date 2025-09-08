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
  <title>Dashboard Estudiante</title>
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
    <img src="../images/canapro-cac-grande-h.png" width="150" alt="Logo Canapro" class="me-3">

    <div class="d-flex">
      <!-- Usuario -->
      <span class="navbar-text text-dark me-3">
        <i class="fa-solid fa-user"></i> <?php echo $_SESSION['usuario']; ?>
      </span>

      <!-- Botón logout -->
      <a href="logout.php" class="btn btn-outline-primary btn-sm d-flex align-items-center">
        <i class="fa-solid fa-right-from-bracket me-2"></i>
        <span>Cerrar sesión</span>
      </a>
    </div>
  </div>
</nav>


  <div class="container-fluid">
    <div class="row">

      <!-- Sidebar -->
      <div class="col-md-3 col-lg-2 bg-white border-end vh-100 p-3">
        <h5 class="text-center mb-4">Menú</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <a href="#" class="nav-link text-dark">
              <i class="fa-solid fa-house me-2"></i> Inicio
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="../login/lecciones/leccion0.php" class="nav-link text-dark">
              <i class="fa-solid fa-book me-2"></i> Mis Cursos
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link text-dark">
              <i class="fa-solid fa-chart-line me-2"></i> Progreso
            </a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link text-dark">
              <i class="fa-solid fa-file-alt me-2"></i> Material
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link text-danger">
              <i class="fa-solid fa-right-from-bracket me-2"></i> Cerrar Sesión
            </a>
          </li>
        </ul>
      </div>

      <!-- Contenido principal -->
      <div class="col-md-9 col-lg-10 p-4">
        <h2 class="mb-4">Bienvenido, <?php echo $_SESSION['usuario']; ?> 🎓</h2>
        
        <div class="row g-3">
          <!-- Tarjetas de información -->
          <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-3">
              <div class="card-body text-center">
                <i class="fa-solid fa-book fa-2x text-primary mb-2"></i>
                <h5 class="card-title">Mis Cursos</h5>
                <p class="card-text">Consulta los cursos en los que estás inscrito.</p>
                <a href="../login/lecciones/leccion0.php" class="btn btn-sm btn-primary">Ver más</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-3">
              <div class="card-body text-center">
                <i class="fa-solid fa-chart-line fa-2x text-success mb-2"></i>
                <h5 class="card-title">Mi Progreso</h5>
                <p class="card-text">Revisa tu avance académico y calificaciones.</p>
                <a href="#" class="btn btn-sm btn-success">Ver más</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-3">
              <div class="card-body text-center">
                <i class="fa-solid fa-file-alt fa-2x text-warning mb-2"></i>
                <h5 class="card-title">Material</h5>
                <p class="card-text">Accede a guías, documentos y material de estudio.</p>
                <a href="#" class="btn btn-sm btn-warning text-white">Ver más</a>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
