<?php

$id_medico = $_REQUEST["id_medico"];

$conexion= mysqli_connect("localhost","root","","hospital-chaco") or exit ("no se puede conectar.....");
if(!$conexion) {
        die("No se pudo conectar a la base de datos."); }

$insertar= "SELECT * FROM pacientes WHERE id_medico ='$id_medico' ";
mysqli_query($conexion,$insertar);

?>