<script type="text/javascript">


function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
}


    
/*function validateForm() {
     var nome = document.forms["myform"]["nome"].value;
  if (nome == "" || nome == "NULL") {
    alert("Nome Obrigatório");
	$("#field01").attr('style',  'border-color: #dc3545');
	return false;
	else{
	$("#field01").attr('style',  'border-color: #28a745');
  }
  }
	var email = document.forms["myform"]["email"].value;
  if (email == "" || email == "NULL") {
    alert("E-mail Obrigatório");
	$("#field02").attr('style',  'border-color: #dc3545');
    return false;
  }
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
	var sexo = document.forms["myform"]["sexo"].value;
  if (sexo == "" || sexo == "NULL") {
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
}
}*/

</script>
<section class="form-sec contact-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="contact-title">Faça sua inscrição</h2>
				<form class="needs-validation contact-form" name="myform" action="<?=base_url('submitcongress')?>" onsubmit="return validateForm()" method="post" novalidate>
					<div class="form-row">
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="nome" id="field01" placeholder="Nome Completo" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="email" class="form-control" name="email" id="field02" placeholder="E-mail" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="cpf" maxlength="14" id="field03" onkeyup="somenteNumeros(this);" OnKeyPress="formatar('###.###.###-##', this)" placeholder="CPF" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="idvendor" id="field00" placeholder="ID referência">
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
											switch($combo->lote[0]){
												case 1:
													$lote = '1';
													break;
												case 2:
													$lote = '2';
													break;
												case 3:
													$lote = '3';
											 		break;
											}
											echo '
												<option value="'.$combo->idCOMBOS.'">'.$combo->nome.' - lote: '.$lote.' - preço: R$'.$combo->preco.'</option>
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
								<h5 class="card-header">Workshops - <button type="button" class="siteinfo-btn" data-toggle="modal" data-target="#infoWorkshop">
  								Para ajudar na sua escolha, clique aqui!
								</button></h5>
								<div class="card-body">
									<select multiple="multiple" id="my-select" name="workshops_select[]">
										<?php foreach ($workshops as $workshop){
											switch($combo->lote[0]){
												case 1:
													$lote = '1';
													break;
												case 2:
													$lote = '2';
													break;
												case 3:
													$lote = '3';
													break;
											}
											echo '
												<option value="'.$workshop->idATIVIDADE.'">'.$workshop->nomeATIVIDADE.' - lote: '.$lote.'- preço: R$<b>'.$workshop->preco.'</b></option>
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
								<h5 class="card-header">Cursos - <button type="button" class="siteinfo-btn" data-toggle="modal" data-target="#infoCurso">
  								Para ajudar na sua escolha, clique aqui!
								</button></h5>
								<div class="card-body">
									<select multiple="multiple" id="my-select" name="cursos_select[]">
										<?php foreach ($cursos as $curso){
											switch($combo->lote[0]){
												case 1:
													$lote = '1';
													break;
												case 2:
													$lote = '2';
													break;
												case 3:
													$lote = '3';
													break;
											}
											echo '
												<option value="'.$curso->idATIVIDADE.'">'.$curso->nomeATIVIDADE.' - lote: '.$lote.'- preço: R$<b>'.$curso->preco.'</b></option>
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
								<h5 class="card-header">Outros - <button type="button" class="siteinfo-btn" data-toggle="modal" data-target="#infoConcurso">
  								Para ajudar na sua escolha, clique aqui!
								</button></h5>
								<div class="card-body">
									<select multiple="multiple" id="my-select" name="concursos_select[]">
										<?php foreach ($concursos as $concurso){
											switch($combo->lote[0]){
												case 1:
													$lote = '1';
													break;
												case 2:
													$lote = '2';
													break;
												case 3:
													$lote = '3';
													break;
											}
											echo '
												<option value="'.$concurso->idATIVIDADE.'">'.$concurso->nomeATIVIDADE.' - lote: '.$lote.'- preço: R$<b>'.$concurso->preco.'</b></option>
											';
										}
										?>
									</select>
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
				<div class="col-xl-4 offset-xl-4 col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-12 col-12 " style="text-align: center">
							<a href="<?=base_url('static/prog.pdf')?>" target="_blank"><button class="site-btn" style="margin-top: 20px">Informações Gerais dos Cursos<br/>CLIQUE AQUI</button></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Modal -->
<div class="modal fade" id="infoWorkshop" tabindex="-1" role="dialog" aria-labelledby="workTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="workTitle">Informações Workshops</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=base_url('static/img/imgCursos/rino_1.jpg')?>" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="<?=base_url('static/img/imgCursos/simone_1.jpg')?>" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="<?=base_url('static/img/imgCursos/adriana_1.jpg')?>" class="d-block w-100" alt="">
    </div>
	  <div class="carousel-item">
      <img src="<?=base_url('static/img/imgCursos/adriana_2.jpg')?>" class="d-block w-100" alt="">
    </div>
	  <div class="carousel-item">
      <img src="<?=base_url('static/img/imgCursos/adriana_3.jpg')?>" class="d-block w-100" alt="">
      </div>
	  <div class="carousel-item">
      <img src="<?=base_url('static/img/imgCursos/kamilla_1.jpg')?>" class="d-block w-100" alt="">
      </div>
	  <div class="carousel-item">
      <img src="<?=base_url('static/img/imgCursos/rino_2.jpg')?>" class="d-block w-100" alt="">
      </div>
	  <div class="carousel-item">
      <img src="<?=base_url('static/img/imgCursos/simone_2.jpg')?>" class="d-block w-100" alt="">
      </div>
	  <div class="carousel-item">
      <img src="<?=base_url('static/img/imgCursos/suzana_1.jpg')?>" class="d-block w-100" alt="">
      </div>
	  <div class="carousel-item">
      <img src="<?=base_url('static/img/imgCursos/rino_3.jpg')?>" class="d-block w-100" alt="">
      </div>
	  <div class="carousel-item">
      <img src="<?=base_url('static/img/imgCursos/adriana_6.jpg')?>" class="d-block w-100" alt="">
      </div>
	  <div class="carousel-item">
		  <img src="<?=base_url('static/img/imgCursos/adriana_7.jpg')?>" class="d-block w-100" alt="">
	  </div>
	  <div class="carousel-item">
		  <img src="<?=base_url('static/img/imgCursos/russa_1.jpg')?>" class="d-block w-100" alt="">
	  </div>
	  <div class="carousel-item">
		  <img src="<?=base_url('static/img/imgCursos/rino_4.jpg')?>" class="d-block w-100" alt="">
	  </div>
	  <div class="carousel-item">
		  <img src="<?=base_url('static/img/imgCursos/herika_2.jpg')?>" class="d-block w-100" alt="">
	  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="infoCurso" tabindex="-1" role="dialog" aria-labelledby="cursosTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cursosTitle">Informações Cursos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 <div id="carouselCurso" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=base_url('static/img/imgCursos/kleidyr_1.jpg')?>" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="<?=base_url('static/img/imgCursos/kleidyr_2.jpg')?>" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="<?=base_url('static/img/imgCursos/kleidyr_3.jpg')?>" class="d-block w-100" alt="">
    </div>
	  <div class="carousel-item">
      <img src="<?=base_url('static/img/imgCursos/kleidyr_4.jpg')?>" class="d-block w-100" alt="">
    </div>
	<div class="carousel-item">
      <img src="<?=base_url('static/img/imgCursos/adriana_4.jpg')?>" class="d-block w-100" alt="">
    </div>
	  <div class="carousel-item">
		  <img src="<?=base_url('static/img/imgCursos/adriana_5.jpg')?>" class="d-block w-100" alt="">
	  </div>
	  <div class="carousel-item">
		  <img src="<?=base_url('static/img/imgCursos/kleidyr_5.jpg')?>" class="d-block w-100" alt="">
	  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselCurso" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselCurso" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="infoConcurso" tabindex="-1" role="dialog" aria-labelledby="concursoTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="concursoTitle">Informações Concursos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=base_url('static/img/imgCursos/herika_1.jpg')?>" class="d-block w-100" alt="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
