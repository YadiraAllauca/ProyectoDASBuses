<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-with, Content-type, Authorization');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

include 'conexionBDRemota.php';

$id_bus_pertenece = $_POST['id_bus_pertenece'];
$numero_puesto = $_POST['numero_puesto'];
$estado = $_POST['estado'];
$descripcion_asiento = $_POST['descripcion_asiento'];
$costo_adicional = $_POST['costo_adicional'];

$sql = "INSERT INTO Asientos (id_bus_pertenece, numero_puesto, estado, descripcion_asiento, costo_adicional) VALUES ('$id_bus_pertenece', '$numero_puesto', '$estado', '$descripcion_asiento', '$costo_adicional')";

if ($conexion->query($sql)===TRUE) {
    echo json_encode(array('OK'=>TRUE));
} else {
    echo json_encode(array('OK'=>FALSE, 'errorMsg'=>$sql.$conexion->error));
}

$conexion->close();
?>