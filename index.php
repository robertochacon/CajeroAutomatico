<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cajero Automatico</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/animate.css">
	<link rel="stylesheet" type="text/css" href="./css/toastr.css">
</head>
<body>

<div class="container">

<div class="row justify-content-center mt-5">

	<div class="col-sm-12 col-md-4 col-lg-4 bg-light pt-5 pb-5 shadow animated fadeIn" style="border-top:2px solid green;border-bottom:2px solid green;">
		<center><h2 class="text-success">Cajero automatico</h2></center>

			<div id="monto_solicitar">
				<form id="form_monto" method="post">
				<div class="form-group pt-3">
					<input type="number" class="form-control" id="monto" name="monto" placeholder="Introdusca un monto" required="" style="font-size:20px;padding:5px;">
				</div>


				<div class="montos_cantidad animated fadeIn">
					<div class="row justify-content-center text-center mt-2 mb-3">
						<div class="col">
							<div class="container">
								<button type="button" class="btn btn-secondary btn-lg shadow hover" onclick="agregar_monto(100);">
									<h4>$100</h4>
								</button>
							</div>
						</div>
						<div class="col">
							<div class="container">
								<button type="button" class="btn btn-secondary btn-lg shadow hover" onclick="agregar_monto(1000);">
									<h4>$1000</h4>
								</button>
							</div>
						</div>
					</div>
					<div class="row justify-content-center text-center mt-2 mb-3">
						<div class="col">
							<div class="container">
								<button type="button" class="btn btn-secondary btn-lg shadow hover" onclick="agregar_monto(200);">
									<h4>$200</h4>
								</button>
							</div>
						</div>
						<div class="col">
							<div class="container">
								<button type="button" class="btn btn-secondary btn-lg shadow hover" onclick="agregar_monto(2000);">
									<h4>$2000</h4>
								</button>
							</div>
						</div>
					</div>
					<div class="row justify-content-center text-center mt-2 mb-3">
						<div class="col">
							<div class="container">
								<button type="button" class="btn btn-secondary btn-lg shadow hover" onclick="agregar_monto(500);">
									<h4>$500</h4>
								</button>
							</div>
						</div>
						<div class="col">
							<div class="container">
								<button type="button" class="btn btn-primary text-white btn-lg shadow hover" onclick="otro_monto();">
									<h4>Otro</h4>
								</button>
							</div>
						</div>
					</div>
					<input type="submit" class="btn btn-success form-control" value="Solicitar">
				</div>


				<div class="otra_cantidad animated fadeIn">
					<div class="row justify-content-center text-center mt-2 mb-3">
						<div class="col-sm-3 col-md-3 col-lg-3">
							<div class="container">
								<button type="button" class="btn btn-secondary btn-lg shadow hover" onclick="agregar_numero(1);">
									<h4>1</h4>
								</button>
							</div>
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<div class="container">
								<button type="button" class="btn btn-secondary btn-lg shadow hover" onclick="agregar_numero(2);">
									<h4>2</h4>
								</button>
							</div>
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<div class="container">
								<button type="button" class="btn btn-secondary btn-lg shadow hover" onclick="agregar_numero(3);">
									<h4>3</h4>
								</button>
							</div>
						</div>
					</div>
					<div class="row justify-content-center text-center mt-2 mb-3">
						<div class="col-sm-3 col-md-3 col-lg-3">
							<div class="container">
								<button type="button" class="btn btn-secondary btn-lg shadow hover" onclick="agregar_numero(4);">
									<h4>4</h4>
								</button>
							</div>
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<div class="container">
								<button type="button" class="btn btn-secondary btn-lg shadow hover" onclick="agregar_numero(5);">
									<h4>5</h4>
								</button>
							</div>
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<div class="container">
								<button type="button" class="btn btn-secondary btn-lg shadow hover" onclick="agregar_numero(6);">
									<h4>6</h4>
								</button>
							</div>
						</div>
					</div>
					<div class="row justify-content-center text-center mt-2 mb-3">
						<div class="col-sm-3 col-md-3 col-lg-3">
							<div class="container">
								<button type="button" class="btn btn-secondary btn-lg shadow hover" onclick="agregar_numero(7);">
									<h4>7</h4>
								</button>
							</div>
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<div class="container">
								<button type="button" class="btn btn-secondary btn-lg shadow hover" onclick="agregar_numero(8);">
									<h4>8</h4>
								</button>
							</div>
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<div class="container">
								<button type="button" class="btn btn-secondary btn-lg shadow hover" onclick="agregar_numero(9);">
									<h4>9</h4>
								</button>
							</div>
						</div>
					</div>
					<div class="row justify-content-center text-center mt-2 mb-3">

						<div class="col-sm-3 col-md-3 col-lg-3  pt-2">
							<div class="container">
								<input type="button" onclick="ver_montos();" class="btn btn-primary text-white" value="Montos">
							</div>
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<div class="container pt-2 pb-2">
								<input type="reset" class="btn btn-danger text-white" value="Limpiar">
							</div>
						</div>
						<div class="col-sm-3 col-md-3 col-lg-3">
							<div class="container">
								<button type="button" class="btn btn-secondary btn-lg shadow hover" onclick="agregar_numero(0);">
									<h4>0</h4>
								</button>
							</div>
						</div>
					</div>
					<input type="submit" class="btn btn-success form-control" value="Solicitar">
				</div>


				</form>
			</div>
	
	</div>

	<div class="col-sm-12 col-md-2 col-lg-2 pt-5 pb-5 animated fadeIn"></div>

	<!-- transacciones recientes -->
	<div class="col-sm-12 col-md-4 col-lg-4 pb-5 animated fadeIn">
			<center><h2>Transacciones</h2></center>
		<div class="container bg-light shadow" style="border-top:2px solid #2E4053;border-bottom:2px solid #2E4053;height: 220px;overflow-y:scroll;">
			
			<div id="datos_transacciones"></div>

		</div>

	<div id="ver_resultados" class="mt-3 pb-3"></div>

	</div>

<!-- efectos de sonido -->
<audio id="ok">
  <source src="./audio/ok.wav" type="audio/wav">
  No soportado.
</audio>

<audio id="error">
  <source src="./audio/error.wav" type="audio/wav">
  No soportado.
</audio>

</div>
</div>

<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/toastr.min.js"></script>
<script src="./js/main.js"></script>
</body>
</html>
