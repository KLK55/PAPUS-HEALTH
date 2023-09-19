<?php

$id_doctor = $_REQUEST["id_doctor"];

$conexion= mysqli_connect("localhost","root","","hospital-chaco") or exit ("no se puede conectar.....");
if(!$conexion) {
        die("No se pudo conectar a la base de datos."); }

$insertar= "SELECT * FROM pacientes WHERE id_doctor = '$id_doctor' ";
mysqli_query($conexion,$insertar);

?>