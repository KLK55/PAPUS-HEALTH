<?php
include("conexion.php");
// Obtener datos de la base de datos
$sql = "SELECT * FROM llamadas";
$result = $conexion->query($sql);
$sql = "SELECT urgencia, COUNT(*) as cantidad FROM llamadas GROUP BY urgencia";
$result = $conexion->query($sql);


$sql = "SELECT * FROM llamadas";
$result = $conexion->query($sql);
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="mirar.css">
    <title>Visualizar Registros de Llamadas</title>
</head>
<body>
    <h1>Visualizar Registros de Llamadas</h1>
    
    <table>
        <tr>
            <th>Nombre Paciente</th>
            <th>Motivo</th>
            <th>Urgencia</th>
            <th>fecha</th>

        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['motivo'] . "</td>";
            echo "<td>" . $row['urgencia'] . "</td>";
            echo "<td>" . $row['fecha'] . "</td>";
            echo "<tr>";
            
    }
        ?>
        
    </table>
</body>
</html>
