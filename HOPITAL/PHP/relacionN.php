<?php
$PISO = $_GET["piso"];
$QIR = $_GET["quirofano"]
$NOM = $_GET["nombre"];

$conexion = mysqli_connect("localhost","root","","hospital-chaco") or exit ("no se puede conectar.....");
$busca = "SELECT Z.piso, Z.quirofano, P.nombre 
            FROM `docpaczon` T
            JOIN `doctores` D ON D.id_doctor = T.id_doctor
            JOIN `pacientes` P ON P.id_pacientes = T.id_paciente
            JOIN `zonas` Z ON Z.id_zona = T.id_zona
            WHERE z.piso = '$PISO'
            AND   P.NOMBRE = '$QIR'
            AND   z.quirofano = '$NOM'";

$result = mysqli_query($conexion,$busca);
?>