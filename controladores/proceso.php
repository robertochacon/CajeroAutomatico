<?php
include('../modelos/libs/conexion.php');

$monto = $_POST['monto']+0;
$minimo = 100;
$maximo = 2000;
$fecha = date("Y-m-d");
$data = array();

if (isset($monto)) {

	//multiplo de 100
	if($monto%100 == 0) {
	
		// for ($minimo <= $maximo; $minimo++) { 
		if($monto >= $minimo && $monto <= $maximo) {

		//insertando el monto en la base de datos
		$sql = "INSERT INTO transacciones(monto,fecha) VALUES('".$monto."','".$fecha."')";
		Conexion::ejecutar($sql);

				//monto ingresado
				$data["monto"] = $monto;

				if ($monto == 100) {
					$data['dosMil'] = 0;
					$data['mil'] = 0;
					$data["quinientos"] = 0;
					$data["docientos"] = 0;
					$data["cien"] = 1;
				}else if ($monto == 200) {
					$data['dosMil'] = 0;
					$data['mil'] = 0;
					$data["quinientos"] = 0;
					$data["docientos"] = 1;
					$data["cien"] = 0;
				}else if ($monto == 300) {
					$data['dosMil'] = 0;
					$data['mil'] = 0;
					$data["quinientos"] = 0;
					$data["docientos"] = 1;
					$data["cien"] = 1;
				}else if ($monto == 400) {
					$data['dosMil'] = 0;
					$data['mil'] = 0;
					$data["quinientos"] = 0;
					$data["docientos"] = 2;
					$data["cien"] = 0;
				}else if ($monto == 500) {
					$data['dosMil'] = 0;
					$data['mil'] = 0;
					$data["quinientos"] = 0;
					$data["docientos"] = 2;
					$data["cien"] = 1;
				}else if ($monto == 600) {
					$data['dosMil'] = 0;
					$data['mil'] = 0;
					$data["quinientos"] = 1;
					$data["docientos"] = 0;
					$data["cien"] = 1;
				}else if ($monto == 700) {
					$data['dosMil'] = 0;
					$data['mil'] = 0;
					$data["quinientos"] = 1;
					$data["docientos"] = 1;
					$data["cien"] = 0;
				}else if ($monto == 800) {
					$data['dosMil'] = 0;
					$data['mil'] = 0;
					$data["quinientos"] = 1;
					$data["docientos"] = 1;
					$data["cien"] = 1;
				}else if ($monto == 900) {
					$data['dosMil'] = 0;
					$data['mil'] = 0;
					$data["quinientos"] = 1;
					$data["docientos"] = 2;
					$data["cien"] = 0;
				}else if ($monto == 1000) {
					$data['dosMil'] = 0;
					$data['mil'] = 0;
					$data["quinientos"] = 2;
					$data["docientos"] = 0;
					$data["cien"] = 0;
				}else if ($monto == 1100) {
					$data['dosMil'] = 0;
					$data['mil'] = 1;
					$data["quinientos"] = 0;
					$data["docientos"] = 0;
					$data["cien"] = 1;
				}else if ($monto == 1200) {
					$data['dosMil'] = 0;
					$data['mil'] = 1;
					$data["quinientos"] = 0;
					$data["docientos"] = 1;
					$data["cien"] = 0;
				}else if ($monto == 1300) {
					$data['dosMil'] = 0;
					$data['mil'] = 1;
					$data["quinientos"] = 0;
					$data["docientos"] = 1;
					$data["cien"] = 1;
				}else if ($monto == 1400) {
					$data['dosMil'] = 0;
					$data['mil'] = 1;
					$data["quinientos"] = 0;
					$data["docientos"] = 2;
					$data["cien"] = 0;
				}else if ($monto == 1500) {
					$data['dosMil'] = 0;
					$data['mil'] = 1;
					$data["quinientos"] = 0;
					$data["docientos"] = 2;
					$data["cien"] = 1;
				}else if ($monto == 1600) {
					$data['dosMil'] = 0;
					$data['mil'] = 1;
					$data["quinientos"] = 1;
					$data["docientos"] = 0;
					$data["cien"] = 1;
				}else if ($monto == 1700) {
					$data['dosMil'] = 0;
					$data['mil'] = 1;
					$data["quinientos"] = 1;
					$data["docientos"] = 1;
					$data["cien"] = 0;
				}else if ($monto == 1800) {
					$data['dosMil'] = 0;
					$data['mil'] = 1;
					$data["quinientos"] = 1;
					$data["docientos"] = 1;
					$data["cien"] = 1;
				}else if ($monto == 1900) {
					$data['dosMil'] = 0;
					$data['mil'] = 1;
					$data["quinientos"] = 1;
					$data["docientos"] = 2;
					$data["cien"] = 0;
				}else if ($monto == 2000) {
					$data['dosMil'] = 1;
					$data['mil'] = 0;
					$data["quinientos"] = 0;
					$data["docientos"] = 0;
					$data["cien"] = 0;
				}

				$data["mensaje"] = "ok";

			}else{
				$data["mensaje"] = "invalido";
			}

	}else{
		$data["mensaje"] = "invalido";
	}

}else{
	$data["mensaje"] = "error";
}

echo json_encode($data);

?>