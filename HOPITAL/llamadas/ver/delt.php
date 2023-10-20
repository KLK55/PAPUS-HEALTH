<?php
include("conexion.php");
session_start();

if (isset($_GET['id'])) {
    $id_registro = $_GET['id'];
    $sql = "DELETE FROM llamadas WHERE id_llamadas = $id_registro";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirige de vuelta a la página principal o donde desees
        exit();
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
} else {
    echo "ID de registro no válido.";
}

$conn->close();
?>
