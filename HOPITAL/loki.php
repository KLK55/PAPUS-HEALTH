<?php
    $conexion = mysqli_connect("localhost","root","","hospital-chaco") or exit ("no se puede conectar.....");
    $pacientes  = ("SELECT * FROM `pacientes` ORDER BY id DESC");
    $anda = mysqli_query($conexion, $pacientes);
    $todospac = mysqli_num_rows($anda);
?>