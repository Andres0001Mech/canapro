<?php
session_start();

$conexion = new mysqli("localhost", "root", "", "sistema_login");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibimos los datos del formulario
$correo = $_POST['correo'];
$contrasena = md5($_POST['contrasena']); // encriptamos con md5 (se recomienda usar password_hash en proyectos reales)

// Usamos sentencias preparadas para evitar inyecciones SQL
$stmt = $conexion->prepare("SELECT * FROM usuarios WHERE correo = ? AND contrasena = ?");
$stmt->bind_param("ss", $correo, $contrasena);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();
    $_SESSION['usuario'] = $usuario['nombre'];
    $_SESSION['rol'] = $usuario['rol'];

    if ($usuario['rol'] == 'admin') {
        header("Location: admin.php");
    } else {
        header("Location: estudiante.php");
    }
    exit();
} else {
    echo "<script>
        alert('Credenciales incorrectas');
        window.location.href = 'login.php';
    </script>";
    exit();
}

$stmt->close();
$conexion->close();
?>
