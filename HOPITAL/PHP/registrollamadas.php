<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Llamadas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <!--<video muted autoplay loop class="video">
        <source src="videoplayback.webm" type="video/mp4" >
    </video>-->
<section>
    <h1 class="borde">Registro</h1>
    <form id="llamadaForm" action="procesar_registro.php" method="POST">
        <label for="nombre">Nombre del Paciente:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="motivo">Motivo de la Llamada:</label>
        <textarea id="motivo" name="motivo" rows="4" required></textarea><br>

        <label for="urgencia">Urgencia:</label>
        <select id="urgencia" name="urgencia">

            <option value="Normal">Normal</option>
            <option value="Emergencia">Emergencia</option>
            <option value="Emergencia">Por error</option>
        </select><br>

        <label for="fecha_registro">Fecha Registro:</label>
        <input type="date" id="fecha_registro" name="fecha_registro" required><br>

        <button type="submit">Registrar Llamada</button>
    </form> 
    <footer>
          
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
    </footer>
</section> 
    <?php 
    include("conexion.php");
    include("validacion.php");
    ?>
</body>
</html>