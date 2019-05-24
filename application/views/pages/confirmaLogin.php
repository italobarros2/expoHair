<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login no sistema</title>
	<link rel="stylesheet" href="<?=base_url('static/css/fix1.css')?>">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?=base_url('static/assets/vendor/bootstrap/css/bootstrap.min.css')?>">
	<link href="<?=base_url('static/assets/vendor/fonts/circular-std/style.css')?>" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url('static/assets/libs/css/style.css')?>">

	<link rel="stylesheet" href="<?=base_url('static/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')?>">
	<link rel="stylesheet" href="<?=base_url('static/assets/vendor/charts/chartist-bundle/chartist.css')?>">
	<link rel="stylesheet" href="<?=base_url('static/assets/vendor/charts/morris-bundle/morris.css')?>">
	<link rel="stylesheet" href="<?=base_url('static/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('static/assets/vendor/charts/c3charts/c3.css')?>">
	<link rel="stylesheet" href="<?=base_url('static/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')?>">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.css"/>
	<style>
		html,
		body {
			height: 100%;
		}

		body {
			display: -ms-flexbox;
			display: flex;
			-ms-flex-align: center;
			align-items: center;
			padding-top: 40px;
			padding-bottom: 40px;
		}
	</style>
</head>

<body>
<!-- ============================================================== -->
<!-- login page  -->
<!-- ============================================================== -->
<div class="splash-container">
	<div class="card card-perso">
		<div class="card-header text-center"><a href="#"><img class="logo-img" src="" alt="logo"></a><span class="splash-description fixtext" style="margin-top: 10px; font-size: 20px">Digite seu CPF: </span></div>
		<div class="card-body">
			<form action="<?=base_url('ingressos/usuario')?>" name="myform" method="post"><!--?=base_url('static/assets/images/logo.png')?>-->
				<div class="form-group" style="margin-bottom: 25px">
					<div class="form-row">
						<div class="col-12">
							<input type="text" class="form-control" name="cpf" maxlength="14" id="field03" onkeyup="somenteNumeros(this);" OnKeyPress="formatar('###.###.###-##', this)" placeholder="CPF" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" name="token" value="<?php echo $tokien;?>">
				<button type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top:45px">Entrar</button>
			</form>
		</div>
	</div>
</div>

<!-- ============================================================== -->
<!-- end login page  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>


<script>

	function somenteNumeros(num) {
		var er = /[^0-9.-]/;
		er.lastIndex = 0;
		var campo = num;
		if (er.test(campo.value)) {
			campo.value = "";
		}
	}

	function validateForm() {
		var cpf = document.forms["myform"]["cpf"].value;
		if (cpf == "" || cpf == "NULL") {
			alert("CPF Obrigatório");
			$("#field03").attr('style',  'border-color: #dc3545');
			return false;
		}
		else{
			cpf = cpf.replace(/[^\d]+/g,'');
			if (cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999"){
				alert("CPF Inválido");
				$("#field03").attr('style',  'border-color: #dc3545');
				return false;
			}
			// Valida 1o digito
			add = 0;
			for (i=0; i < 9; i ++){
				add += parseInt(cpf.charAt(i)) * (10 - i);
				rev = 11 - (add % 11);
			}
			if (rev == 10 || rev == 11)	{
				rev = 0;
			}
			if (rev != parseInt(cpf.charAt(9))){
				alert("CPF Inválido");
				$("#field03").attr('style',  'border-color: #dc3545');
				return false;
			}
			// Valida 2o digito
			add = 0;
			for (i = 0; i < 10; i ++){
				add += parseInt(cpf.charAt(i)) * (11 - i);
				rev = 11 - (add % 11);
			}
			if (rev == 10 || rev == 11){
				rev = 0;
			}
			if (rev != parseInt(cpf.charAt(10))){
				alert("CPF Inválido");
				$("#field03").attr('style',  'border-color: #dc3545');
				return false;
			}
			else{
				$("#field03").attr('style',  'border-color: #28a745');
				return true;
			}
		}
		/*var sexo = document.forms["myform"]["sexo"].value;
		/*if (sexo == "" || sexo == "NULL") {
			alert("Selecione um Sexo");
			$("#field04").attr('style',  'border-color: #dc3545');
			return false;
		}
		var cidade = document.forms["myform"]["cidade"].value;
		if (cidade == "" || cidade =="NULL") {
			alert("Cidade Obrigatório");
			$("#field05").attr('style',  'border-color: #dc3545');
			return false;
		}
		var bairro = document.forms["myform"]["bairro"].value;
		if (bairro == "" || bairro == "NULL") {
			alert("Selecione um Curso");
			$("#field06").attr('style',  'border-color: #dc3545');
			return false;
		}
		var telefone = document.forms["myform"]["telefone"].value;
		if (telefone == "" || telefone == "NULL") {
			alert("Selecione um Curso");
			$("#field07").attr('style',  'border-color: #dc3545');
			return false;
		}
		else{
			return true;
		}*/
	}

</script>
</body>

</html>
