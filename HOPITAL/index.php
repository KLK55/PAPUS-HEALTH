<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
    <title>INDEX</title>
    <link rel="stylesheet" href="./CSS/estilo.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<video muted autoplay loop class="video">
     <source src="./ASSES/videoplayback.webm" type="video/mp4" >
</video>

<div class="todo">
<?php
if (isset($_GET['lol'])) {
	echo "<h1>FAROS</h1>";
} ?>
    <?php include("./PHP/conexion.php");

    $kk = mysqli_query($conexion,"SELECT * FROM `docpaczon` T, `doctores` D, `pacientes` P, `zonas` Z
    WHERE Z.id_zona = T.id_zona
    AND P.id_pacientes = T.id_paciente
    AND D.id_doctor = T.id_doctor ");
    while($pacientes_caja = mysqli_fetch_row($kk)) {
    ?>
        <div class="container p-5 my-5 bg-dark text-white koko">            
            <div class="input-group mb-3">
             <div class="container">
              <div class="row">
                <div class="col">
                  <h2>Piso: <?php echo $pacientes_caja['piso'] ?>, Sala: <?php echo $pacientes_caja['quirofano'] ?></h2>
                </div>
                <div class="col">
                  <h2>Nombre de Paciente:<?php echo $pacientes_caja['nombres'] ?></h2>
                </div>
                <div class="col-md-6 offset-md-3 row form" >
                  <button class="btn btn-info">Historial Medico </button>
                </div>
                <div class="col col-lg-2 medio">
                <form style="border-radius=8px" action="./PHP/estado.php" method="POST" name="estado">
                <select class="form-select medio" aria-label="Default select example">
                  <option selected>Seleciona el estado del Paciente</option>
                  <option value="skull">ESQUELETO</option>
                  <option value="mal">Con Dolores</option>
                  <option value="bien">BIEN</option>
                  <option value="alta">DAR EL ALTA</option>
                </select> 
                <button type="submit" class="btn btn-danger">Ingresar</button>
                </form>
                </div>
        
              </div>
            </div> 
            </div>
            <div class="row"><button type="submit" class="btn btn-primary espaciado">CODIGO AZUL</button><div>
        <div>
        </br>
        <?php } ?>
<div>

</body>
</html>