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


<div class="container p-5 my-5 bg-dark text-white">
<?php include("./conexion.php"); ?>
    <div class="input-group mb-3">
     <div class="container">
      <div class="row">
        <div class="col">
          <h2>Nombre de Paciente:</h2>
        </div>
        <div class="col-md-6 offset-md-3 row form" >
          <button>Historial Medico </button>
        </div>
        <div class="col col-lg-2 medio">
        <form action="./estado.php" method="POST">
        <select class="form-select medio" aria-label="Default select example">
          <option selected>Seleciona el estado del Paciente</option>
          <option value="skull">ESQUELETO</option>
          <option value="mal">Con Dolores</option>
          <option value="bien">BIEN</option>
          <option value="alta">DAR EL ALTA</option>
        </select> 
        <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
        </div>
        
      </div>
    </div> 
    </div>
    <div class="row"><button type="submit" class="btn btn-primary espaciado">CODIGO AZUL</button><div>
<div>

</body>
</html>