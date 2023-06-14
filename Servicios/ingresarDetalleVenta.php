<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-with, Content-type, Authorization');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

include 'conexionBDRemota.php';

$id_venta = $_POST['id_venta'];
$id_asiento = $_POST['id_asiento'];
$cedula_pasajero = $_POST['cedula_pasajero'];
$precio = $_POST['precio'];

$sql = "INSERT INTO Detalle_Venta(id_venta, id_asiento, cedula_pasajero, precio) VALUES ($id_venta, $id_asiento, '$cedula_pasajero', $precio)";

if ($conexion->query($sql)===TRUE) {
    echo json_encode(array('OK'=>TRUE));
} else {
    echo json_encode(array('OK'=>FALSE, 'errorMsg'=>$sql.$conexion->error));
}

$conexion->close();
?>