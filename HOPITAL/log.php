<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8" />
    <title>Login</title>
    <link href="./css/estilo.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="todo">    
    <?php include("./php/conexion.php"); ?>
    <div class="logo">
        <h1> HOSPITAL "EL CHACO"</h1>
    </div>
    <div class="container mt-3">
        <div class="login">
        <h2>Ingrese paciente :) o <a href="./indec.php">medico</a></h2>
        </div>
        <form action="./php/logg.php">
            <div class="mb-3 mt-3">
                <label class="lavel" for="nom">Nombre de Paciente:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingresa Nombre" name="usuario">
            </div>
            <div class="mb-3">
                <label class="lavel" for="pwd">DNI:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Ingresa tu DNI" name="contrasena">
            </div>
            <div class="form-check mb-3">
                <label class="lavel" class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Recuerdame
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
    </div>
</div>
    <video muted autoplay loop class="video">
         <source src="./ASSES/videoplayback.webm" type="video/mp4" >
    </video>
</body>
</html>