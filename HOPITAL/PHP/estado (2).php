<?php

$doctor = $_GET["id_doctor"];
$tas = $_REQUEST["estado"];   

$conexion = mysqli_connect("localhost","root","","hospital-chaco") or exit ("no se puede conectar.....");
$busca = "SELECT Count(*) FROM pacientes WHERE id_doctor = '$doctor' and estado ='$tas' ";
$result = mysqli_query($conexion,$busca);

if ($result > 0){
    $hapen = $result->fetch_assoc();
    if ($doctor == $hapen['id_doctor']) {
	$tas = $_POST['estado'];
}
    header("Location: ../index.php");
    exit();
}
else{
    echo "LPM PHP";
}
?>