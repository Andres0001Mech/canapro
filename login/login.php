<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- ✅ importante para móviles -->
  <title>Login</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

  <div class="card shadow-lg p-3 p-md-4 rounded-4 w-100" style="max-width: 400px;">
    
    <!-- Logo -->
    <div class="text-center mb-3">
      <br>
      <img src="../images/canapro-cac-grande-h.png" class="img-fluid" alt="Logo Canapro" style="max-width: 80%;">
    </div>
    <hr>

    <form action="validacion.php" method="POST" id="loginForm">
      
      <!-- Correo -->
      <div class="mb-3">
        <label for="correo" class="form-label">Email</label>
        <input type="email" class="form-control" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
      </div>

      <!-- Contraseña con botón para ver -->
      <div class="mb-3">
        <label for="contrasena" class="form-label">Contraseña</label>
        <div class="input-group">
          <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Digite su contraseña" required>
          <button class="btn btn-outline-secondary" type="button" id="togglePassword">
            <i class="fa-solid fa-eye"></i>
          </button>
        </div>
      </div>

      <!-- Recordar usuario -->
      <div class="form-check mb-3">
        <input class="form-check-input" type="checkbox" id="recordar" name="recordar">
        <label class="form-check-label" for="recordar">
          Recordar usuario
        </label>
      </div>

      <!-- Botón -->
      <div class="d-grid mb-3">
        <button type="submit" class="btn btn-primary">
          <i class="fa-solid fa-right-to-bracket me-2"></i> Ingresar
        </button>
      </div>

      <!-- Links -->
      <div class="text-center">
        <a href="#" class="d-block mb-2 text-decoration-none">¿Olvidó su contraseña?</a>
        <a href="../index.php" class="d-block text-decoration-none">Ir a Inicio</a>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Script -->
  <script>
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("contrasena");
    const correoInput = document.getElementById("correo");
    const recordarCheck = document.getElementById("recordar");
    const loginForm = document.getElementById("loginForm");

    // 👁️ Ver/ocultar contraseña con ícono
    togglePassword.addEventListener("click", function () {
      const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
      passwordInput.setAttribute("type", type);

      this.innerHTML = type === "password" 
        ? '<i class="fa-solid fa-eye"></i>' 
        : '<i class="fa-solid fa-eye-slash"></i>';
    });

    // 📌 Cargar correo si está guardado
    window.addEventListener("DOMContentLoaded", () => {
      const savedEmail = localStorage.getItem("correo");
      if (savedEmail) {
        correoInput.value = savedEmail;
        recordarCheck.checked = true;
      }
    });

    // 💾 Guardar o borrar correo al enviar
    loginForm.addEventListener("submit", () => {
      if (recordarCheck.checked) {
        localStorage.setItem("correo", correoInput.value);
      } else {
        localStorage.removeItem("correo");
      }
    });
  </script>

</body>
</html>
