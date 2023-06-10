<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-with, Content-type, Authorization');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

include 'conexionBDRemota.php';

$id_asignacion_pertenece = $_POST['id_asignacion_pertenece'];

$sql = "SELECT * FROM Paradas WHERE id_asignacion_pertenece = '$id_asignacion_pertenece'";

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    
    $datosParadas = array(
        'costo_parada' => $fila['costo_parada'],
        'duracion_parada' => $fila['duracion_parada'],
        'origen_parada' => $fila['origen_parada'],
        'destino_parada' => $fila['destino_parada']
    );
    
    echo json_encode($datosParadas, JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode(array('mensaje' => 'No hay paradas'), JSON_UNESCAPED_UNICODE);
}

$conexion->close();
?>
