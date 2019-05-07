<!DOCTYPE html>
<html>
	<head>
		<title>Title of the document</title>
	</head>

	<body>
		<form action="<?=base_url('trata_pagseguro')?>" method="post">
			<input type="hidden" name="token" id="token" value="edb6f6de-3125-401c-a1cf-664af789e6c7e9dc25cc459293ba57a61ee7cab448c08673-200c-4642-a41f-fcfd8fd086fa">
			<input type="hidden" name="email" id="email" value="italoctb@gmail.com">
			<input type="hidden" name="currency" id="cur" value="BRL">
			<input type="hidden" name="itemId1" id="id" value="1">
			<input type="hidden" name="itemQuantity1" id="qtd" value="1">
			<input type="hidden" name="itemDescription1" id="dsc" value="aprendendo">
			<input type="hidden" name="itemAmount1" id="amt" value="1.00">
			<button type="submit">Botao</button>
		</form>
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
