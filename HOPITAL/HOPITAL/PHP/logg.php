<?php

$usuario = $_POST["nombre"];
$contra = $_POST["DNI"];

$conexion= mysqli_connect("localhost","root","","hospital-chaco") or exit ("no se puede conectar.....");
$sql = "Select Count(*) From `pacientes` where nombre ='$usuario' and DNI ='$contra'";
$result = mysqli_query($conexion, $sql);        

if ($result > 0){
    $hapen = $result->fetch_assoc();
    if ($contra == $hapen['DNI']) {
	$_SESSION['nombre'] = $hapen['nombre'];
    
<<<<<<< HEAD
    header("Location: ../index.php?lol#medicos");
=======
    header("Location: ../index.php");
>>>>>>> 9b06a16ec8d161032977098cedb6ec226cbf98e6
    exit();
}
else{
    echo "NO ESTAS";
<<<<<<< HEAD
}}
=======
}
>>>>>>> 9b06a16ec8d161032977098cedb6ec226cbf98e6
?>