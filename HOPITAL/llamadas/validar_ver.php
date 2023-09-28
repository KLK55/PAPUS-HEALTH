<?php
$mysqli = new mysqly("localhost", "root", "", "hospital-chaco");

$salida = "";
$query = "SELECT * FROM llamadas ORDER By Cod_producto";

if(isset($_POST['consulta'])){
    $q = $mysqli->real_escape_string($_POST['consulta']);
    $query = "SELECT id_llamada, nomnbre, motivo, urgencia FROM llamadas
    WHERE nombre LIKE '%".$q."%' OR motivo LIKE '%".$q."%' OR urgerncia LIKE '%".$q."%'";
}

$resultado = $mysqli->query($query);

if($resultado->num_rows > 0){

    $salida.="<table class='tabla_datos'>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>modelo</td>
                    </tr>
                </thead>
                <tbody>";
}else {

}
?>