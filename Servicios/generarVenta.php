<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-with, Content-type, Authorization');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

include 'conexionBDRemota.php';

$id_cliente = $_POST['id_cliente'];
$id_parada = $_POST['id_parada'];
$id_viaje_diario = $_POST['id_viaje_directo'];
$fecha_hora = $_POST['fecha_hora'];
$forma_pago = $_POST['forma_pago'];
$codigo_qr = $_POST['codigo_qr'];
$comprobante = $_POST['comprobante'];
$total = $_POST['total'];

$sql = "INSERT INTO Ventas(id_cliente, id_parada, id_viaje_directo, fecha_hora, forma_pago, codigo_qr, comprobante, total) VALUES
($id_cliente, $id_parada, $id_viaje_directo, '$fecha_hora', '$forma_pago', '$codigo_qr', '$comprobante', total)";

if ($conexion->query($sql)===TRUE) {
    echo json_encode(array('OK'=>TRUE));
} else {
    echo json_encode(array('OK'=>FALSE, 'errorMsg'=>$sql.$conexion->error));
}

$conexion->close();
?>