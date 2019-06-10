<footer id="footer" class="footer-section set-bg" data-setbg="<?=base_url('static/img/page-top-bg/4.jpg')?>">
	<div class="footer-warp">
		<div class="footer-widgets">
			<div class="col-lg-8">
				<div class="footer-widget about-widget">
					<img src="<?=base_url('static/img/logo.png')?>" width="200" alt="">
					<p>Congresso e Feira ExpoHair. Beleza, cabelo, bem-estar, saúde, unhas, cosméticos, perfumaria</p>
					<div class="fw-social">
						<a href="https://www.instagram.com/congressoefeiraexpohair_/"><i class="fa fa-instagram"></i>       @congressoefeiraexpohair_</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="copyright">
				<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Site desenvolvido por <a href="/">TecHHub</a></p>
			</div>
		</div>
	</div>
</footer>


<!--====== Javascripts & Jquery ======-->
<script src="<?=base_url('static/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?=base_url('static/js/popper.min.js')?>"></script>
<script src="<?=base_url('static/js/jquery-ui.min.js')?>"></script>
<script src="<?=base_url('static/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('static/js/owl.carousel.min.js')?>"></script>
<script src="<?=base_url('static/js/circle-progress.min.js')?>"></script>
<script src="<?=base_url('static/js/main.js')?>"></script>
<script src="<?=base_url('static/assets/vendor/multi-select/js/jquery.multi-select.js')?>"></script>
<script src="<?=base_url('static/bootstrap-select/dist/js/bootstrap-select.min.js')?>"></script>
<script src="<?=base_url('static/bootstrap-select/dist/js/i18n/defaults-pt_BR.min')?>"></script>
<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
		'use strict';
		window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		}, false);
	})();
</script>

<script>
	$('#my-select, #pre-selected-options').multiSelect()
</script>
<script>
	$('#callbacks').multiSelect({
		afterSelect: function(values) {
			alert("Select value: " + values);
		},
		afterDeselect: function(values) {
			alert("Deselect value: " + values);
		}
	});
</script>
<script>
	$('#keep-order').multiSelect({ keepOrder: true });
</script>
<script>
	$('#public-methods').multiSelect();
	$('#select-all').click(function() {
		$('#public-methods').multiSelect('select_all');
		return false;
	});
	$('#deselect-all').click(function() {
		$('#public-methods').multiSelect('deselect_all');
		return false;
	});
	$('#select-100').click(function() {
		$('#public-methods').multiSelect('select', ['elem_0', 'elem_1'..., 'elem_99']);
		return false;
	});
	$('#deselect-100').click(function() {
		$('#public-methods').multiSelect('deselect', ['elem_0', 'elem_1'..., 'elem_99']);
		return false;
	});
	$('#refresh').on('click', function() {
		$('#public-methods').multiSelect('refresh');
		return false;
	});
	$('#add-option').on('click', function() {
		$('#public-methods').multiSelect('addOption', { value: 42, text: 'test 42', index: 0 });
		return false;
	});
</script>
<script>
	$('#optgroup').multiSelect({ selectableOptgroup: true });
</script>
<script>
	$('#disabled-attribute').multiSelect();
</script>
<script>

	function maisUM(field){
		var quantity = parseInt($(field).val());
		if(quantity < 10){
			$(field).val(quantity + 1);
		}
	}

	function menosUM(id){
		var quantity = parseInt($(id).val());
		if(quantity > 0){
			$(id).val(quantity - 1);
		}
	}

</script>
<script>
	/*$(document).ready(function(){

		var quantitiy=0;
		$('.'+'quantity-right-plus').click(function(e){

			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());

			// If is not undefined

			$('#quantity').val(quantity + 1);


			// Increment

		});

		$('.quantity-left-minus').click(function(e){
			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());

			// If is not undefined

			// Increment
			if(quantity>0){
				$('#quantity').val(quantity - 1);
			}
		});

	});*/
</script>
<script>
	$('#custom-headers').multiSelect({
		selectableHeader: "<div class='custom-header'>Selectable items</div>",
		selectionHeader: "<div class='custom-header'>Selection items</div>",
		selectableFooter: "<div class='custom-header'>Selectable footer</div>",
		selectionFooter: "<div class='custom-header'>Selection footer</div>"
	});
</script>

<script>

	$("a[href^='#']").click(function(e) {
		e.preventDefault();

		var position = $($(this).attr("href")).offset().top;

		$("body, html").animate({
			scrollTop: position
		}, 'slow' );
	});

	$('.carousel').carousel();

	function somenteNumeros(num) {
		var er = /[^0-9.-]/;
		er.lastIndex = 0;
		var campo = num;
		if (er.test(campo.value)) {
			campo.value = "";
		}
	}

	function validateForm() {
		var nome = document.forms["myform"]["nome"].value;
		if (nome == "" || nome == "NULL") {
			alert("Nome Obrigatório");
			$("#field01").attr('style',  'border-color: #dc3545');
			return false;
		}
		if (nome.indexOf(' ') < 0){
			alert("Nome Completo inválido");
			$("#field01").attr('style',  'border-color: #dc3545');
			return false;
		}
		else{
				$("#field01").attr('style',  'border-color: #28a745');
			}
		var email = document.forms["myform"]["email"].value;
		/*if (email == "" || email == "NULL") {
			alert("E-mail Obrigatório");
			$("#field02").attr('style',  'border-color: #dc3545');
			return false;
		}*/
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

<script>

	function ctchName() {
		var text = $("#stands option:selected").text();
		var qtd_itens = $("#stands").val().length;
		var length_total = text.length + 2*(qtd_itens - 1);
		var text_final = '';
		for(var i = 0; i<length_total; i++){
			text_final = text_final + $('.filter-option-inner-inner').text()[i];
		}
		$('#name_stands').val(text_final);
		$('#qtd_stands').val(qtd_itens);
		return true;
	}

	function showOutros(){
		if($("#profs").val() == 11){
			$("#outros").fadeIn();
		}else{
			$("#outros").fadeOut();
		}
	}



	function total_stands(){
		if($("input[name='optradio']:checked").val()==1){
			if($('#tipo_pagamento').val() == ''){
				$('#tipo_pagamento').val(0);
			}
			var count = 0;
			var taxa_0 = 250;
			var taxa_1 = 280;
			for(var i = 0; i<$('#stands').val().length; i++){
				if($('#tipo_pagamento').val() == 0){

					count = count + taxa_0*parseInt($('#stands').val()[i]);
				}else if($('#tipo_pagamento').val() == 1){
					count = count + taxa_1*parseInt($('#stands').val()[i]);
				}

			}
			$('#total_stand').val('R$'+count+'.00');
		}

	}

	function block() {
		if($("input[name='optradio']:checked").val()==0){
			$('#total_stand').removeAttr('disabled');
			// console.log('OLA');
		}
		if($("input[name='optradio']:checked").val()==1){
			$('#total_stand').attr('disabled','disabled');
			// console.log('MUNDO');
		}

	}

</script>

</body>
</html>
