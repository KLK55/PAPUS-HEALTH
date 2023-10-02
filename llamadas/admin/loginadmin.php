<?php 
session_start();
?>
<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Administrar</title>
<link rel="stylesheet" href="admin.css">
</head>

<body>
<section id="contenedor">
    <section id="contenido">
    <h2>Logearse como Administrador</h2>
    <?php
     if (isset($_SESSION["Admin"])){
         include("contenido_clientes.php");
     }
     else{
         //echo "esta cerrada";
    
     
    ?>

    <form method="POST" action="validarusu.php"id="formulario">
     
       <ul>
        <li>NombreUsuario:<input name="usuario" type="text"  /></li>
        <li>Contraseña: <input name="password" type="password"/></li>
        <li><input type="submit" value="Enviar" /></li>
       </ul>    
        
    </form>
   
     <?php
     }
     ?>     
   
   
   
    </section>


</section>
</body>
</html>