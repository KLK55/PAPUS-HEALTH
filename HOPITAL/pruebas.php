<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital-chaco";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM pacientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<select name="nombre">';

    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["	id_paciente"] . '">' . $row["nombre"] . '</option>';
    }

    echo '</select>';
} else {
    echo "No hay categorías disponibles";
}
?>