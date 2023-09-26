<?php

$doctor = $_GET["id_doctor"];
$tas = $_GET["estado"];

$conexion = mysqli_connect("localhost","root","","hospital-chaco") or exit ("no se puede conectar.....");
$busca = "SELECT * FROM `docpaczon` T, `doctores` D, `pacientes` P, `zonas` Z
    WHERE Z.id_zona = T.id_zona
    AND P.id_pacientes = T.id_paciente
    AND D.id_doctor = T.id_doctor ";
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