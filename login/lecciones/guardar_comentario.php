<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] != 'estudiante') {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['comentario'])) {
    include("../../config/conexion.php");

    $usuario = $_SESSION['usuario'];
    $comentario = trim($_POST['comentario']);

    $stmt = $conn->prepare("INSERT INTO comentarios (usuario, comentario) VALUES (?, ?)");
    $stmt->bind_param("ss", $usuario, $comentario);

    if ($stmt->execute()) {

              echo "<script>
                alert('✅ Su comentario se ha publicado correctamente.');
                window.location.href = 'foro.php';
              </script>";

        exit();
    } else {
        echo "Error al guardar el comentario.";
    }
}
?>
