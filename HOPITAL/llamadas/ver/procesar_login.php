<?php
session_start();
include("conexion.php");

$N_usuario = $_POST['nombre'];
$contrasena = $_POST['contrasena'];

if ($N_usuario = 'nombre' && $contrasena = 'contrasena') {
    $_SESSION['rol'] = 'admin';
    header("Location: index.php");
    exit();
} else {
    echo "Credenciales incorrectas. Inténtalo de nuevo.";
}
?>
