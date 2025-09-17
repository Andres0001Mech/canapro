<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] != 'estudiante') {
    header("Location: login.php");
    exit();
}

// Incluir conexión
include("../../config/conexion.php");

// Obtener comentarios
$sql = "SELECT usuario, comentario, fecha FROM comentarios ORDER BY fecha DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Foro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <style>
    body {
      background: #f9fafc;
    }
    .comentario-card {
      transition: transform 0.2s;
    }
    .comentario-card:hover {
      transform: scale(1.01);
    }
    .avatar {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      object-fit: cover;
    }
  </style>
</head>
<body>

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


<!-- Contenido -->
<div class="container py-5">
  <h1 class="text-center text-primary fw-bold mb-4">
    <img src="#"  alt="">
    <i class="fa-solid fa-comments me-2"></i>Foro del Curso Economía Solidaria
  </h1>
  <p class="text-center text-muted mb-5">
    Comparte tus ideas, dudas o experiencias sobre el curso de Economía Solidaria.  
    <br>Recuerda mantener un lenguaje respetuoso y constructivo. 🙌
  </p>

  <!-- Formulario de comentario -->
  <div class="card shadow-sm mb-5">
    <div class="card-body">
      <h5 class="card-title text-success fw-bold mb-3">
        <i class="fa-solid fa-pen-to-square me-2"></i> Escribe un comentario
      </h5>
      <form action="guardar_comentario.php" method="POST">
        <div class="mb-3">
          <textarea name="comentario" class="form-control" rows="3" required placeholder="Escribe tu opinión..."></textarea>
        </div>
        <button type="submit" class="btn btn-success px-4">
          <i class="fa-solid fa-paper-plane"></i> Publicar
        </button>
      </form>
    </div>
  </div>

  <!-- Lista de comentarios -->
  <h3 class="mb-4 text-dark fw-bold">
    <i class="fa-solid fa-clock-rotate-left me-2"></i> Últimos comentarios
  </h3>
  <?php if ($result->num_rows > 0): ?>
    <?php while($row = $result->fetch_assoc()): ?>
      <div class="card mb-3 shadow-sm comentario-card">
        <div class="card-body d-flex">
          <img src="https://ui-avatars.com/api/?name=<?= urlencode($row['usuario']); ?>&background=0D8ABC&color=fff" class="avatar me-3" alt="avatar">
          <div>
            <h6 class="fw-bold text-primary mb-1">
              <?= htmlspecialchars($row['usuario']); ?>
            </h6>
            <p class="mb-1"><?= nl2br(htmlspecialchars($row['comentario'])); ?></p>
            <small class="text-muted">
              <i class="fa-solid fa-calendar-day me-1"></i> <?= date("d/m/Y H:i", strtotime($row['fecha'])); ?>
            </small>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php else: ?>
    <div class="alert alert-info">
      <i class="fa-solid fa-circle-info"></i> Aún no hay comentarios. ¡Sé el primero en participar!
    </div>
  <?php endif; ?>

  <!-- Navegación -->
  <div class="d-flex justify-content-center gap-3 mt-5">
    <a href="leccion4.php" class="btn btn-outline-primary btn-lg shadow-sm">
      <i class="fa-solid fa-book-open me-2"></i> Ir a Lección 4
    </a>
    <a href="leccion5.php" class="btn btn-success btn-lg shadow-sm">
      Siguiente Unidad<i class="fa-solid fa-arrow-right ms-2"></i>
    </a>
  </div>
</div>

</body>
</html>
