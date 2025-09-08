<?php
$conexion = new mysqli("localhost", "root", "", "sistema_login");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id=$id";
$resultado = $conexion->query($sql);

if ($resultado->num_rows == 1) {
    $usuario = $resultado->fetch_assoc();
} else {
    die("Usuario no encontrado");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <h2>Editar Usuario</h2>
    <form action="actualizar_usuario.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">

        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" required><br><br>

        <label>Correo:</label>
        <input type="email" name="correo" value="<?php echo $usuario['correo']; ?>" required><br><br>

        <label>Nueva Contraseña:</label>
        <input type="password" name="contrasena"> (déjalo vacío si no quieres cambiarla)<br><br>

        <label>Rol:</label>
        <select name="rol" required>
            <option value="admin" <?php if($usuario['rol']=="admin") echo "selected"; ?>>Administrador</option>
            <option value="estudiante" <?php if($usuario['rol']=="estudiante") echo "selected"; ?>>Estudiante</option>
        </select><br><br>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
