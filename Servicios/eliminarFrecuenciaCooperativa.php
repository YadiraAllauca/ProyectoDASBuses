<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-with, Content-type, Authorization');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

include 'conexionBDRemota.php';

$id_asignacion = $_POST['id_asignacion'];

$sql = "DELETE FROM Frecuencias_Cooperativas WHERE id_asignacion = '$id_asignacion'";

if ($conexion->query($sql) === TRUE) {
    echo json_encode(array('OK' => TRUE));
} else {
    echo json_encode(array('OK' => FALSE, 'errorMsg' => $sql . $conexion->error));
}

$conexion->close();
?>
