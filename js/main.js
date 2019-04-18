$(document).ready(function(){

ver_transacciones();
$(".montos_cantidad").show();
$(".otra_cantidad").hide();

	$("#form_monto").submit(function(event){
		event.preventDefault();

		var monto = $("#monto").val();

		$.ajax({
			url:'./controladores/proceso.php',
			type:'POST',
			data:$(this).serialize(),
			method:'POST',
			beforeSend:function(){
				toastr.info('Status','Procesando...',{timeOut:3000});
				$("#ver_resultados").html("<center  class='animated bounceIn'><br><h3>Cargando...</h3><img src='./img/loading.gif' width='80px'></center>");
			},
			success: function(response){

				var resultado = JSON.parse(response);

				if(resultado.mensaje === 'ok'){

				var html_resultado = `<div id="resultado" class='animated bounceIn'>
				<center><h3 class="text-success">Resultado</h3></center>
					<div class="alert alert-success">
						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-6">
								<b>Monto: <span id="p-monto">${resultado.monto}</span></b>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6">
								<b>Billetes de 100: <span id="p-cien">${resultado.cien}</span></b>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-6">
								<b>Billetes de 200: <span id="p-docientos">${resultado.docientos}</span></b>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6">
								<b>Billetes de 500: <span id="p-quinientos">${resultado.quinientos}</span></b>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-6">
								<b>Billetes de 1000: <span id="p-docientos">${resultado.mil}</span></b>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6">
								<b>Billetes de 2000: <span id="p-quinientos">${resultado.dosMil}</span></b>
							</div>
						</div>
					</div>
				</div>`;

					setTimeout(function(){
						toastr.success('','Retiro exitoso',{timeOut:5000});
						// $("#ver_resultados").html($("#resultado").show());

						$("#ver_resultados").html(html_resultado);
						audio_ok();

						// setTimeout(function(){
						// 	location.reload();
						// },10000);
					},2000);
					$("#form_monto")[0].reset();
					ver_transacciones();

				}else if(resultado.mensaje === 'invalido'){
					$("#form_monto")[0].reset();
					toastr.warning('','El monto solicitado no es valido',{timeOut:5000});
					setTimeout(function(){$("#ver_resultados").html("<center  class='animated bounceIn text-danger'><h2>Monto no disponible</h2><img src='./img/money.png' width='120px'></center>");audio_error();},1000);
				}else if(resultado.mensaje === 'error'){
					toastr.error('','Intantar mas tarde',{timeOut:5000});
				}
			}
		});
	});

});

function agregar_monto(numero){
	var valor = $("#monto").val();
	$("#monto").val(numero);
}

function agregar_numero(numero){
	var valor = $("#monto").val();
	var result = valor+numero;
	$("#monto").val(result);
}

function volver_atras(){
	$("#ver_resultados").html("<center class='animated bounceIn'><br><h3>Cargando...</h3><img src='./img/loading.gif' width='80px'></center>");
	setTimeout(function(){
		location.reload();
	},1000);

}

function ver_transacciones(){
	$.ajax({
		url: './controladores/json_transacciones.php',
		type: 'POST',
		dataType: 'html',
		beforeSend:function(){
			$("#datos_transacciones").html("<center  class='animated bounceIn'><br><h3>Cargando...</h3><img src='./img/loading.gif' width='80px'></center>");
		}
	}).
	done(function(response){
		var transacciones = JSON.parse(response);
		var html = "<table class='table'><thead><th>Id</th><th>Monto</th><th>Fecha</th></thead><tbody>";

		for (var i in transacciones.data) {
			html += "<tr><td>"+transacciones.data[i].id+"</td><td>"+transacciones.data[i].monto+"</td><td>"+transacciones.data[i].fecha+"</td><td></tbody>";
		}

		$("#datos_transacciones").html(html);

	}).
	fail(function(){
		console.log("Error :(");
	})
}

function audio_error(){
	document.getElementById("error").play();
}

function audio_ok(){
	document.getElementById("ok").play();
}

function otro_monto(){
	$(".montos_cantidad").hide();
	$(".otra_cantidad").show();
}

function ver_montos(){
	$(".montos_cantidad").show();
	$(".otra_cantidad").hide();
}