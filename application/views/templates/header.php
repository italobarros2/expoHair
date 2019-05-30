<!DOCTYPE html>
<html lang="PT-br">
<head>
	<title>Congresso e Feira ExpoHair</title>
	<meta charset="iso-8859-1">
	<meta name="description" content="Site oficial Congresso e Feira Expohair">
	<meta name="keywords" content="diva, beauty, beleza, congresso">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="<?=base_url('static/img/icone.ico')?>" rel="shortcut icon"/>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?=base_url('static/css/style-form.css')?>">
	<link rel="stylesheet" href="<?=base_url('static/css/bootstrap.min.css')?>"/>
	<link rel="stylesheet" href="<?=base_url('static/css/font-awesome.min.css')?>"/>
	<link rel="stylesheet" href="<?=base_url('static/css/jquery-ui.min.css')?>"/>
	<link rel="stylesheet" href="<?=base_url('static/css/flaticon.css')?>"/>
	<link rel="stylesheet" href="<?=base_url('static/css/owl.carousel.css')?>"/>
	<link rel="stylesheet" href="<?=base_url('static/css/style.css')?>"/>
	<link rel="stylesheet" href="<?=base_url('static/css/animate.css')?>"/>
	<link rel="stylesheet" href="<?=base_url('static/assets/vendor/multi-select/css/multi-select.css')?>"/>
	<link rel="stylesheet" href="<?=base_url('static/bootstrap-select/dist/css/bootstrap-select.min.css')?>">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
	
</head>
<body>
