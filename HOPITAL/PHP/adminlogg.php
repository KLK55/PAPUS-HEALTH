<?php
include("../php/conexion.php");
session_start();
$user = $_SESSION['N_usuario'];
$passw = $_SESSION['contrasena'];

if ($user == 'admin') {
	$venga = "SELECT Count(*) FROM `admin` WHERE N_usuario = $user and contrasena = $idadmin";
    $tamo = mysqli_query($conexion, $venga);
    if ($tamo > 0) {
         $hapen = $result->fetch_assoc();
        if ($idadmin == $hapen['contrasena']) {
	    $_SESSION['N_usuario'] = $hapen['N_usuario'];
    }
  }
}   

?>