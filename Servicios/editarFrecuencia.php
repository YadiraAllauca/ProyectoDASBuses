<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-with, Content-type, Authorization');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

include 'conexionBDRemota.php';

$id_frecuencia =  $_POST['id_frecuencia'];
$origen_frecuencia =  $_POST['origen_frecuencia'];
$destino_frecuencia =  $_POST['destino_frecuencia'];
$duracion_frecuencia = $_POST['duracion_frecuencia'];
$tipo_frecuencia = $_POST['tipo_frecuencia'];
$costo_frecuencia = $_POST['costo_frecuencia'];
$estado_frecuencia = $_POST['estado_frecuencia'];

$sql = "UPDATE Frecuencias SET origen_frecuencia='$origen_frecuencia', destino_frecuencia='$destino_frecuencia', duracion_frecuencia='$duracion_frecuencia', tipo_frecuencia='$tipo_frecuencia', costo_frecuencia='$costo_frecuencia', estado_frecuencia='$estado_frecuencia' WHERE id_frecuencia='$id_frecuencia'";

if ($conexion->query($sql)===TRUE) {
    echo json_encode(array('OK'=>TRUE));
} else {
    echo json_encode(array('OK'=>FALSE, 'errorMsg'=>$sql.$conexion->error));
}

$conexion->close();
?>