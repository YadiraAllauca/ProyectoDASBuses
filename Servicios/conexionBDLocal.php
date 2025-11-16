<?php

$host = "localhost";
$dbUsuario = "root"; 
$dbContraseña = "rootbd"; 
$dbNombre = "id20780986_proyecto_buses_das";

$conexion = new mysqli($host, $dbUsuario, $dbContraseña, $dbNombre);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}else{
  echo "Conexión exitosa a la base de datos";
}

?>
