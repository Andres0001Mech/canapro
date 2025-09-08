<?php
$conexion = new mysqli("localhost", "root", "", "sistema_login");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$rol = $_POST['rol'];

if (!empty($_POST['contrasena'])) {
    $contrasena = md5($_POST['contrasena']);
    $sql = "UPDATE usuarios SET nombre='$nombre', correo='$correo', contrasena='$contrasena', rol='$rol' WHERE id=$id";
} else {
    $sql = "UPDATE usuarios SET nombre='$nombre', correo='$correo', rol='$rol' WHERE id=$id";
}

if ($conexion->query($sql) === TRUE) {
    echo "Usuario actualizado correctamente. <a href='login.php'>Volver</a>";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>
