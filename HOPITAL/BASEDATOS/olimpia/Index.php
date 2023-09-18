<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8"/>
    <title>INDEX</title>
    <link rel="stylesheet" href="./estilo.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>


<?php include("./conexion.php"); ?>
<div class="input-group mb-3">
 <div class="container">
  <div class="row">
    <div class="col">
      <h2>Nombre de Paciente:</h2>
    </div>
    <div class="col-md-6 offset-md-3" >
      <h2><a>Historial Medico </a></h2>
    </div>
    <div class="col col-lg-2 medio">
      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Estado del Paciente</button>
    <ul class="dropdown-menu dropdown-menu-end medio">
    <li><a class="dropdown-item" href="#">ESQUELETO</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">DOLORES</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">BIEN</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">DE ALTA</a></li>
    </ul>
    </div>
    <div class="col col-lg-3"><button type="submit" class="btn btn-primary">Ingresar</button></div>
    
    
    <button type="submit" class="btn btn-primary espaciado">CODIGO AZUL</button>
  </div>
</div> 
</div>
    <footer>
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
    </footer>
</section> 
</body>
</html>