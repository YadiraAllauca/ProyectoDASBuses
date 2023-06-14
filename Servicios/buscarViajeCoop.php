<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-with, Content-type, Authorization');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

include 'conexionBDRemota.php';

$origen =  $_POST['origen'];
$destino =  $_POST['destino'];
$cooperativa = $_POST['cooperativa'];
$tipo_asiento = $_POST['tipo_asiento'];
#$chasis = $_POST['chasis'];

if (!empty($cooperativa)) {
  $sql = "SELECT F.*, P.*, B.* FROM Cooperativas AS C, Frecuencias AS F, Frecuencias_Cooperativas AS FC, Paradas AS P, Buses AS B, Usuarios AS U, Viajes_Diarios AS VD WHERE C.nombre_cooperativa='$cooperativa' AND ((F.origen_frecuencia=$origen AND F.destino_frecuencia=$destino AND FC.id_frecuencia_asignada=F.id_frecuencia) OR (P.origen_parada=$origen AND P.destino_parada=$destino AND P.id_asignacion_pertenece=FC.id_asignacion)) AND FC.id_cooperativa_pertenece=C.id_cooperativa AND B.id_socio=U.id_usuario AND C.id_cooperativa=U.id_coop AND VD.id_asignacion_pertenece=FC.id_asignacion AND VD.id_bus_viaje=B.id_bus GROUP BY FC.id_asignacion";
}
if (!empty($tipo_asiento)) {
  $sql = "SELECT F.*, P.*, B.*, A.* FROM Cooperativas AS C, Frecuencias AS F, Frecuencias_Cooperativas AS FC, Paradas AS P, Buses AS B, Usuarios AS U, Viajes_Diarios AS VD, Asientos AS A WHERE C.nombre_cooperativa='$cooperativa' AND ((F.origen_frecuencia=$origen AND F.destino_frecuencia=$destino AND FC.id_frecuencia_asignada=F.id_frecuencia) OR (P.origen_parada=$origen AND P.destino_parada=$destino AND P.id_asignacion_pertenece=FC.id_asignacion)) AND FC.id_cooperativa_pertenece=C.id_cooperativa AND B.id_socio=U.id_usuario AND C.id_cooperativa=U.id_coop AND VD.id_asignacion_pertenece=FC.id_asignacion AND VD.id_bus_viaje=B.id_bus GROUP BY FC.id_asignacion";
}

$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $lista = array();

    while ($fila = $resultado->fetch_assoc()) {
        $lista[] = $fila;
    }

    $json = json_encode($lista, JSON_UNESCAPED_UNICODE);

    echo $json;
} else {

    echo json_encode(array('mensaje' => 'No se encontraron registros en la tabla'));
}
$conexion->close();
?>