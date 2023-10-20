<?php
include("./ver/conexion.php");


if ($conn->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conn->connect_error);
}


$nombre_paciente = $_POST['nombre'];
$motivo = $_POST['motivo'];
$urgencia = $_POST['urgencia'];
$fecha = date("d/m/y");


$sql = "INSERT INTO llamadas (nombre, motivo, urgencia, fecha) VALUES ('$nombre_paciente', '$motivo', '$urgencia', '$fecha')";

if ($conn->query($sql) === TRUE) {
    header("Location: ./ver/index.php"); 
} else {
    echo "Error al registrar la llamada: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
