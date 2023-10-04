<?php
$conexion = mysqli_connect("localhost", "root","","hospital-chaco") or exit ("no se puede conectar");

// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexión a la base de datos ha fallado: " . $conexion->connect_error);
}

// Obtener datos del formulario
$nombre_paciente = $_POST['nombre'];
$motivo = $_POST['motivo'];
$urgencia = $_POST['urgencia'];
$fecha = date("d/m/y");

// Insertar datos en la base de datos
$sql = "INSERT INTO llamadas (nombre, motivo, urgencia, fecha) VALUES ('$nombre_paciente', '$motivo', '$urgencia', '$fecha')";

if ($conexion->query($sql) === TRUE) {
    header("Location: visualizar_datos.php"); 
    exit;
} else {
    echo "Error al registrar la llamada: " . $conexion->error;
}

// Cerrar la conexión
$conexion->close();
?>
