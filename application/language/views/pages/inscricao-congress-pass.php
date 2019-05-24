<script type="text/javascript">
/*function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
}

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
    var retornoNome = "Nao foi dessa vez";
	return false;
  }
    var cpf = document.forms["myform"]["cpf"].value;
  if (cpf == "" || cpf == "NULL") {
    //alert("CPF Obrigatório");
	$("#validaCpf").text("Esse campo não podfenwbei");
    return false;
  }
	else{
	cpf = cpf.replace(/[^\d]+/g,'');
	if (cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999"){
		$("#field03").classList.add('was-validated');
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
			alert("CPF Inválido 2");
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
		alert("CPF Inválido 3");
		return false;
	}
		else{return true;}
	}
	
	var data = document.forms["myform"]["data"].value;
  if (data == "" || data == "NULL") {
    alert("Data Obrigatório");
    return false;
  }
	var cidade = document.forms["myform"]["cidade"].value;
  if (cidade == "" || cidade =="NULL") {
    alert("Cidade Obrigatório");
    return false;
  }
	var curso = document.forms["myform"]["curso"].value;
  if (curso == "" || curso == "NULL") {
    alert("Selecione um Curso");
    return false;
  }
else{
	alert("Tudo Certo");
	return true;
}
}
*/
</script>
<section class="form-sec contact-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="contact-title">Faça sua inscrição</h2>
				<form class="needs-validation contact-form" name="myform" action="<?=base_url('submitcongress')?>" onsubmit="" method="post" novalidate>
					<div class="form-row">
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="nome" id="field01" placeholder="Nome Completo" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
							<input type="email" class="form-control" name="email" id="field02" placeholder="E-mail" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="cpf" maxlength="14" id="field03" onkeyup="//somenteNumeros(this);" OnKeyPress="//formatar('###.###.###-##', this)" placeholder="CPF" required>
							<div class="invalid-feedback valid_perso" id="validaCpf">
								Esse campo não pode está vazio!
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
							<div class="form-group">
								<select class="custom-select" style="border:none; border-bottom: 2px solid #e3e3e3;margin-bottom: 20px" name="sexo" id="field04" required>
									<option value="">Sexo</option>
									<option value="F">Feminino</option>
									<option value="M">Masculino</option>
									<option value="O">Outros</option>
								</select>
								<div class="invalid-feedback valid_perso" style="margin-top: -4px !important">Deve-se escolher dentre as opções acima.</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="cidade" id="field05" placeholder="Cidade" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="bairro" id="field06" placeholder="Bairro" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-perso form-control" name="telefone" id="field07" maxlength="13" onkeyup="somenteNumeros(this);" OnKeyPress="formatar('##.####-#####', this)" placeholder="Telefone (preferência Whatsapp)" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
					</div>
					<h2 class="contact-title" style="margin-top: 10px">Escolha os produtos que você deseja comprar</h2>

					<div class="form-row"style="margin-bottom: 20px">
						<div class="col-xl-1 col-lg-1 col-md-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
							<div class="card">
								<h5 class="card-header">Combos</h5>
								<div class="card-body">
									<select id="my-select" name="combos_select[]" multiple>
										<?php foreach ($combos as $combo){
											echo '
												<option value="'.$combo->idCOMBOS.'">'.$combo->nome.' - lote: '.$combo->lote.' - preço: R$'.$combo->preco.'</option>
											';
										}
										?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row"style="margin-bottom: 20px">
						<div class="col-xl-1 col-lg-1 col-md-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
							<div class="card">
								<h5 class="card-header">Workshops</h5>
								<div class="card-body">
									<select multiple="multiple" id="my-select" name="workshops_select[]">
										<?php foreach ($workshops as $workshop){
											echo '
												<option value="'.$workshop->idATIVIDADE.'">'.$workshop->nomeATIVIDADE.' - lote: '.$workshop->lote.'- preço: R$'.$workshop->preco.'</option>
											';
										}
										?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row"style="margin-bottom: 20px">
						<div class="col-xl-1 col-lg-1 col-md-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
							<div class="card">
								<h5 class="card-header">Cursos</h5>
								<div class="card-body">
									<select multiple="multiple" id="my-select" name="cursos_select[]">
										<?php foreach ($cursos as $curso){
											echo '
												<option value="'.$curso->idATIVIDADE.'">'.$curso->nomeATIVIDADE.' - lote: '.$curso->lote.'- preço: R$'.$curso->preco.'</option>
											';
										}
										?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row"style="margin-bottom: 20px">
						<div class="col-xl-1 col-lg-1 col-md-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
							<div class="card">
								<h5 class="card-header">Concursos</h5>
								<div class="card-body">
									<select multiple="multiple" id="my-select" name="concursos_select[]">
										<?php foreach ($concursos as $concurso){
											echo '
												<option value="'.$concurso->idATIVIDADE.'">'.$concurso->nomeATIVIDADE.' - lote: '.$concurso->lote.'- preço: R$'.$concurso->preco.'</option>
											';
										}
										?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
							<div class="form-group">
								<div class="form-check">
									<input class="form-check-input form-perso" type="checkbox" value="" id="invalidCheck" style="width: 50px; margin-left:-28px; margin-top: 20px" required>
									<label class="form-check-label" for="invalidCheck" style="position: relative; left: 25px; top: 20px">
										Li e aceito os termos do regulamento.
									</label>
									<div class="invalid-feedback" style="margin-top: 20px;">
										Você deve aceitar os termos do regulamento antes de se inscrever.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-xl-4 offset-xl-4 col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-12 col-12 " style="text-align: center">
							<button class="site-btn" type="submit" style="margin-top: 20px">Inscrever-se</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
