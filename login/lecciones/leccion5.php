<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] != 'estudiante') {
    header("Location: login.php");
    exit();
}

$pagina = isset($_GET['pagina']) ? intval($_GET['pagina']) : 1;
?>