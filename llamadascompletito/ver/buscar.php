<?php
include("conexion.php");
session_start();

$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : '';

$columns = ['id_llamadas', 'nombre', 'motivo', 'urgencia', 'fecha'];

$where = '';
if (!empty($campo)) {
    $where = "WHERE (";
    foreach ($columns as $column) {
        $where .= "$column LIKE '%$campo%' OR ";
    }
    $where = substr_replace($where, '', -3);
    $where .= ")";
}

$sql = "SELECT * FROM llamadas $where";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id_llamadas'] . '</td>';
        echo '<td>' . $row['nombre'] . '</td>';
        echo '<td>' . $row['motivo'] . '</td>';
        echo '<td>' . $row['urgencia'] . '</td>';
        echo '<td>' . $row['fecha'] . '</td>';

        if ($_SESSION['rol'] === 'admin') {
            // Mostrar botones de borrar y modificar
            echo '<td><a href="edit.php?id=' . $row['id_llamadas'] . '">Modificar</a></td>';
            echo '<td><a href="delt.php?id=' . $row['id_llamadas'] . '">Borrar</a></td>';

        }

        echo '</tr>';
    }
} else {
    echo '<tr>';
    echo '<td colspan="5">Sin resultados</td>';
    echo '</tr>';
}

$conn->close();
?>
