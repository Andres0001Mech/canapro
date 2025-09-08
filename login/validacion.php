<?php
session_start();

$conexion = new mysqli("localhost", "root", "", "sistema_login");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$correo = $_POST['correo'];
$contrasena = md5($_POST['contrasena']); // encriptamos con md5

$sql = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();
    $_SESSION['usuario'] = $usuario['nombre'];
    $_SESSION['rol'] = $usuario['rol'];

    if ($usuario['rol'] == 'admin') {
        header("Location: admin.php");
    } else {
        header("Location: estudiante.php");
    }
} else {
    echo "Credenciales incorrectas. <a href='login.php'>Volver</a>";
}
?>
