﻿<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
    <title>INDEX</title>
    <link rel="icon" type="image/x-icon" href="./ASSES/logo.png">
    <link rel="stylesheet" href="./CSS/estilo.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<video muted autoplay loop class="video">
     <source src="./ASSES/videoplayback.webm" type="video/mp4" >
</video>
<div class="navbar">
        <nav>
            <a href="indec.php"><img src="./ASSES/logo.png"  alt="logo"></a>
            <button id="menuButton" class="menu-button">☰</button>
            <div id="menuDropdown" class="menu-dropdown">
                <ul>
                    <li><a href="#">Opción 1</a></li>
                    <li><a href="#">Opción 2</a></li>
                </ul>
            </div>
            <button><a href="./ASSES/mapa.jpg" download="MAPA-HOSPITAL">Descargar Mapa</a></button>
        </nav>
  </div>
  <?php include("./PHP/conexion.php"); ?>
<div class="todo">
    <div class="container p-5 my-5 bg-dark text-white koko">            
            <div class="input-group mb-3">
             <div class="container">
              <div class="row">
                <div class="col">
                  <?php
                  $idPaciente = 4;
                  $queryPaciente = "SELECT pacientes.nombre FROM pacientes WHERE pacientes.id_pacientes = $idPaciente";
                  $queryZona = "SELECT zonas.piso, zonas.quirofano FROM zonas WHERE zonas.id_zona = (SELECT id_zona FROM pacientes WHERE id_pacientes = $idPaciente)";

                  $resultadoPaciente = mysqli_query($conexion, $queryPaciente);
                  $resultadoZona = mysqli_query($conexion, $queryZona);

                  if ($resultadoPaciente) {
                      $rowPaciente = mysqli_fetch_assoc($resultadoPaciente);
                      $nombrePaciente = $rowPaciente["nombre"];
                  } else {
                      $nombrePaciente = "Nombre no encontrado";
                  }

                  if ($resultadoZona) {
                      $rowZona = mysqli_fetch_assoc($resultadoZona);
                      $piso = $rowZona["piso"];
                      $quirofano = $rowZona["quirofano"];
                  } else {
                      $piso = "Piso no encontrado";
                      $quirofano = "Quirofano no encontrado";
                  }
                  ?>
                  <h5>Piso: <?php echo $piso; ?><br>Sala: <?php echo $quirofano; ?></h5>
                </div>
                <div class="col">
                  <h5>Nombre de Paciente: <?php echo $nombrePaciente; ?></h5>
                </div>
                <div class="col-md-6 offset-md-3 row form" >
                  <button class="btn btn-info " ><a class="SHH" href="./llamadas/registrollamadas.php">Crear Registro del paciente</a></button>
                  
                </div>
                <div class="col col-lg-2 medio">
                <form style="border-radius=8px " action="./PHP/estado.php" method="POST" name="estado">
                <select class="form-select medio" aria-label="Default select example">
                  <option selected>Selecciona el estado del Paciente</option>
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
            <div class="row"><button  id="showAlertBtn" type="submit" class="btn btn-primary espaciado">CODIGO AZUL</button></div>
            <div id="customAlert" class="custom-alert">
        </div>       
    </div>
</div>
<div class="todo">
    <div class="container p-5 my-5 bg-dark text-white koko">            
            <div class="input-group mb-3">
             <div class="container">
              <div class="row">
                <div class="col">
                  <h5>Piso:1 <br>Sala:2 </h5>
                </div>
                <div class="col">
                  <!-- Aquí deberías realizar otra consulta similar para mostrar los datos del paciente 2 -->
                </div>
                <div class="col-md-6 offset-md-3 row form" >
                <button class="btn btn-info " ><a class="SHH" href="./llamadas/registrollamadas.php">Crear Registro del paciente</a></button>
                </div>
                <div class="col col-lg-2 medio">
                <form style="border-radius=8px " action="./PHP/estado.php" method="POST" name="estado">
                <select class="form-select medio" aria-label="Default select example">
                  <option selected>Selecciona el estado del Paciente</option>
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
            <div class="row"><button  id="showAlertBtn" type="submit" class="btn btn-primary espaciado">CODIGO AZUL</button></div>
            <div id="customAlert" class="custom-alert">
        </div>       
</div>
        </br>
</div>
        <div class="footer-bottom">
            <p>copyright &copy;2023 By: LOS PAPUS</p>
        </div>
</body>
</html>
