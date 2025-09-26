<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "chatbot", "123456", "canaprobd");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}


?>
