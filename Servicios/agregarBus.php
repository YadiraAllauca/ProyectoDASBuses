<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-with, Content-type, Authorization');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

include 'conexionBDRemota.php';

$numero_bus =  $_POST['numero_bus'];
$placa_bus =  $_POST['placa_bus'];
$carroceria_bus = $_POST['carroceria_bus'];
$cantidad_asientos = $_POST['cantidad_asientos'];
$fotografia = $_POST['fotografia'];
$id_socio = $_POST['id_socio'];
$estado = $_POST['estado'];

$sql = "INSERT INTO Buses (numero_bus, placa_bus, carroceria_bus, cantidad_asientos, fotografia, id_socio, estado) VALUES ('$numero_bus', '$placa_bus', '$carroceria_bus','$cantidad_asientos', '$fotografia', '$id_socio', '$estado')";

if ($conexion->query($sql)===TRUE) {
    echo json_encode(array('OK'=>TRUE));
} else {
    echo json_encode(array('OK'=>FALSE, 'errorMsg'=>$sql.$conexion->error));
}

$conexion->close();
?>