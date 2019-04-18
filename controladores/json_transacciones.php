<?php
include('../modelos/libs/conexion.php');

$sql = "SELECT * FROM transacciones ORDER BY id DESC";
$datos_transacciones = Conexion::consultar($sql);
$data = array();

foreach ($datos_transacciones as $key => $value) {
	$data["data"][] = $value;
}

echo json_encode($data);


?>