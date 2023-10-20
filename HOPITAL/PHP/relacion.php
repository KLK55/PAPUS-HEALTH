<?php

$PISO = $_GET["piso"];
$QIR = $_GET["quirofano"];

$conexion = mysqli_connect("localhost","root","","hospital-chaco") or exit ("no se puede conectar.....");
$busca = "SELECT * FROM `zona`
            WHERE piso = '$PISO'
            AND   quirofano = '$QIR'";
$result = mysqli_query($conexion,$busca);

?>