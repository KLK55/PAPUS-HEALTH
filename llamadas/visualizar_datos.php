<!DOCTYPE html>

<head>
    <title>Document</title>
</head>
<body>
<section class="principal">
    <!--<h1>visualizar datos con filtrado</h1>
        <div class="form-1-2">
            <label for="caja_busqueda">buscar</label>
            <input type="text" name="caja_busqueda" id="caja_busqueda"></input>
        </div>
        <div id="datos">

        </div>-->
</section>
<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>

<?php
include("conexion.php");
$sql = "SELECT * FROM llamadas";
$result = $conexion->query($sql);
$sql = "SELECT urgencia, COUNT(*) as cantidad FROM llamadas GROUP BY urgencia";
$result = $conexion->query($sql);


$sql = "SELECT * FROM llamadas";
$result = $conexion->query($sql);
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="./estilo/mirar.css">
    <title>Visualizar Registros de Llamadas</title>
</head>
<body>
    <video muted autoplay loop class="video">
        <source src="./estilo/videoplayback.webm" type="video/mp4" >
    </video>
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
    <button> <a href="registrollamadas.php">Registrar otra llamada</a></button>
    
</body>
</html>
