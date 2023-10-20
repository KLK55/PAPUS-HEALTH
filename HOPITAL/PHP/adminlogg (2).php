<?php
session_start();

$user = $_SESSION['N_usuario'];
$passw = $_SESSION['contrasena'];

$conexion= mysqli_connect("localhost","root","","hospital-chaco") or exit ("no se puede conectar.....");
$venga = "SELECT Count(*) FROM `admin` WHERE N_usuario = '$user' and contrasena = '$passw'";
$tamo = mysqli_query($conexion, $venga);

if ($tamo > 0) {
	$hapen = $result->fetch_assoc();
	if ($passw == $hapen['contrasena']) {
	$_SESSION['N_usuario'] = $hapen['N_usuario'];
	
}
}   

?>