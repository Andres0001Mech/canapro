<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] != 'admin') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>
<body>
    <h2>Bienvenido Administrador: <?php echo $_SESSION['usuario']; ?></h2>
    <a href="logout.php">Cerrar sesión</a>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <h2>Registrar Nuevo Usuario</h2>
    <form action="insertar_usuario.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Correo:</label>
        <input type="email" name="correo" required><br><br>

        <label>Contraseña:</label>
        <input type="password" name="contrasena" required><br><br>

        <label>Rol:</label>
        <select name="rol" required>
            <option value="admin">Administrador</option>
            <option value="estudiante">Estudiante</option>
        </select><br><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>



</body>
</html>
