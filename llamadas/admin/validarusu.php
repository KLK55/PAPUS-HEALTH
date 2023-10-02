<?php 
session_start();
$nom_usuario= $_POST["usuario"];
$pass_usuario = $_POST["password"];
include("conexion.php");

$sql= "SELECT * FROM `usuario` WHERE nombre='$nom_usuario'&& contrasena='$pass_usuario';
echo $sql;
$resultado= mysqli_query($con,$sql);
if (!$resultado) {
    echo "No se pudo ejecutar con exito la consulta ($sql) en la BD: " . mysql_error();
    exit;
}
$arra_asc= mysqli_fetch_array($resultado);

    if ($usuario =$arra_asc["nombre"] && $pass_usuario=$arra_asc['contrasena'] ){
        echo "se logoe";    
        $_SESSION["Admin"]=$nom_usuario;
    
        header("Location: visualizar_datos.php");
    }
    else{
    
    echo($mail_usuario."-error- ".$pass_usuario);
    
    $msj ="Usuario o contraseña erroneas";
    header("Location: index.php?Login=0"%$msj);
 
    }

?>