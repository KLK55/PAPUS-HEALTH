<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['motivo']) >= 1 && strlen($_POST['urgencia']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $motivo = trim($_POST['motivo']);
        $urgencia = trim($_POST['urgencia']);
        $fecha = date("dd/mm/yyyy");
        $consulta = "INSERT INTO llamadas (nombre, motivo, urgencia,)
                    VALUES ('$nombre', '$motivo', '$urgencia')";
        $resultado = mysqli_query($conn, $consulta); 
        if ($resultado) {
?>
            <h3 class="success">Tu registro se ha completado</h3>
<?php
        } else {
?>
            <h3 class="error">Ocurrió un error</h3>
<?php
        }
    } else {
?>
        <h3 class="error">Llena todos los campos</h3>
<?php
    }
}
?>
