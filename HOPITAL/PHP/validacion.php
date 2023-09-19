<?php
$nombre_paciente = $_POST['nombre'];
$motivo = $_POST['motivo'];
$urgencia = $_POST['urgencia'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO registrollamada (nombre, motivo, urgencia, fecha) VALUES ('$nombre_paciente', '$motivo', '$urgencia')";

if ($conexion->query($sql) === TRUE) {
    echo "Llamada registrada con éxito.";
} else {
    echo "Error al registrar la llamada: " . $conexion->error();
}
?>