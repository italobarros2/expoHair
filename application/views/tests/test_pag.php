<!DOCTYPE html>
<html>
	<head>
		<title>Title of the document</title>
	</head>

	<body>
		<form action="<?=base_url('pagamento/processo')?>" method="post">
			<input type="hidden" name="notificationCode" id="token" value="14F26577B74EB74E205CC400FF99F086B840">
			<button type="submit">Botao</button>
		</form>
		<?php echo sha1('3122493#06532114308');?>
	</body>

	<footer>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
		<script type="text/javascript"
				src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js">
		</script>
		<script type="text/javascript">

			function formLogin(){

				var field1 = $('#field1').val();
				var field2 = $('#field2').val();
				var field3 = $('#field3').val();
				var field4 = $('#field4').val();
				var field5 = $('#field5').val();
				var field6 = $('#field6').val();
				var field7 = $('#field7').val();
				var field08 = $('#field08').val();
				var field09 = $('#field09').val();
				var field10 = $('#field10').val();
				var field11 = $('#field11').val();

				$.ajax({ url: 'http://localhost/expohair/dados_pagseguro',
					data: {
						'nome':field1,
						'email':field2,
						'cpf':field3,
						'sexo':field4,
						'cidade':field5,
						'bairro':field6,
						'telefone':field7,
						'combos_select':field8,
						'workshops_select':field9,
						'cursos_select':field10,
						'concursos_select':field11
					},
					type: 'post',
					dataType:'json',
					success: function(data) {
						alert(data);
					}
				});
			}

		</script>
	</footer>

</html>
