<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Llamadas</title>
    <link rel="stylesheet" href="./estilo/registro.css">
</head>
<body>
    <video muted autoplay loop class="video">
        <source src="./estilo/videoplayback.webm" type="video/mp4" >
    </video>
    <h1 class="borde">Registro</h1>
    <form class="lindo" id="llamadaForm" action="procesar_registro.php" method="POST">
        <label for="nombre">Nombre del Paciente:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="motivo">Motivo de la Llamada:</label>
        <textarea id="motivo" name="motivo" rows="4" required></textarea><br>

        <label class="urgen" for="urgencia">Urgencia:</label>
        <select id="urgencia" name="urgencia">  
            <option value="Normal">Normal</option>
            <option value="Emergencia">Emergencia</option>
            <option value="Por error">Por error</option>
        </select>
        <br>

        <button class="btn" type="submit">Registrar Llamada</button>
    </form>  
    <?php 
    include("validacion.php");
    ?>
</body>
</html>