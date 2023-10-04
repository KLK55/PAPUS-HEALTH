<?php
include("conexion.php"); // Incluye el archivo de conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id_registro = $_GET['id']; // Obtiene el ID del registro a editar desde la URL
    $nombre_paciente = $_POST['nombre'];
    $motivo = $_POST['motivo'];
    $urgencia = $_POST['urgencia'];

   
    $sql = "UPDATE llamadas SET nombre = '$nombre_paciente', motivo = '$motivo', urgencia = '$urgencia' WHERE id_llamadas = $id_registro";

    if ($conn->query($sql) === TRUE) {
      
        header("Location: index.php");
        exit();
    } else {
      
        echo "Error al actualizar el registro: " . $conn->error;
    }
} else {
    
    echo "No se han recibido datos para actualizar.";
}

$conn->close(); // Cierra la conexión a la base de datos
?>
