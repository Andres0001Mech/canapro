<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "sistema_login");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Recibimos los datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = md5($_POST['contrasena']); // Encriptación con md5 (puede usarse password_hash para más seguridad)
$rol = $_POST['rol'];

// Insertamos en la base de datos
$sql = "INSERT INTO usuarios (nombre, correo, contrasena, rol) 
        VALUES ('$nombre', '$correo', '$contrasena', '$rol')";

if ($conexion->query($sql) === TRUE) {
    echo "Usuario registrado exitosamente. <a href='login.php'>Ir al login</a>";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>
