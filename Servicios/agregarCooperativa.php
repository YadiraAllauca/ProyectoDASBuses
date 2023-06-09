<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-with, Content-type, Authorization');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

include 'conexionBDRemota.php';

$ruc_cooperativa = $_POST['ruc_cooperativa'];
$nombre_cooperativa = $_POST['nombre_cooperativa'];
$cantidad_buses = $_POST['cantidad_buses'];

$sql = "INSERT INTO Cooperativas (ruc_cooperativa, nombre_cooperativa, cantidad_buses) VALUES ('$ruc_cooperativa', '$nombre_cooperativa', '$cantidad_buses')";

if ($conexion->query($sql)===TRUE) {
    echo json_encode(array('OK'=>TRUE));
} else {
    echo json_encode(array('OK'=>FALSE, 'errorMsg'=>$sql.$conexion->error));
}

$conexion->close();
?>