<!-- Page info section -->
<section class="page-info-section set-bg" data-setbg="<?=base_url('static/img/page-top-bg/1.jpg')?>" >
	<div class="container text-center">
		<h2>Planta do Evento</h2>
	</div>
</section>
<!-- Page info section end f5ec5f -->
<div class="back-mapa" style="margin-top: 20px">
	<center><img src="<?=base_url('static/img/mapa_1.jpg')?>" width="700px" alt=""></center>
</div>
<section class="popular-services-section">
	<div class="container">
		<div class="section-title">
			<h2>Compre agora seu stand!</h2>
		</div>
		<div class="popular-services-slider owl-carousel">
			<div class="service popular-item">
				<i class="flaticon-048-makeup"></i>
				<h2>Produtos e serviços a serem comercializados:</h2>
				<p>Cosméticos, Nails, Perfumaria, Farmacêuticos, Higiene Pessoal, Sistemas, Saúde, Bem-Estar, Equipamentos, Vestuário, Couros e Acessórios para Salões, Clinicas, Hotéis, Spás e Condomínios.</p>
			</div>
			<div class="service popular-item">
				<i class="flaticon-017-soap"></i>
				<h2>Stands para expor seus produtos e serviços:</h2>
				<p>Empresas e profissionais qualificados e preparados para tornarem o evento inesquecível apresentam produtos e serviços para as empresas e profissionais interessadas em comprar.</p>
			</div>
			<div class="service popular-item">
				<i class="flaticon-009-makeup-5"></i>
				<h2>Investimento:</h2>
				<p>Aproveite a tabela promocional com descontos especiais para quem comprar com antecedência do evento.</p>
			</div>
		</div>
		<center><div class="col-lg-10">
				<p>**Adquira logo seu stand quanto mais cedo, mais barato e quem deixar pra última hora, fica sujeito a existência de vagas.
					<br>*Verificar disponibilidade.</p>
			</div>
			<!--<div class="col-lg-8" style="margin: 50px 0px 50px 0px">
				<a href="#" class="site-btn sb-big">PARA COMPRA E MAIS INFORMAÇÕES: (85) 9 9659 - 7500 | TIM & WhatsApp</a>
                <a href="<?=base_url('static/manualexpo.pdf')?>" target="_blank" style="margin-top: 10px" class="site-btn sb-big">Manual do Expositor - Clique Aqui</a>
			</div>--></center>
	</div>
</section>

<section class="form-sec contact-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="contact-title">Compre já seu Stand e potencialize seu negócio.</h2>

				<form class="needs-validation contact-form" name="myform" action="<?=base_url('processaPlanta')?>" onsubmit="return ctchName()"  method="post" novalidate>
					<h4 style="margin-bottom: 20px">Dados do Representante</h4>
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
							<input type="text" class="form-control" name="cpf" id="field03" onkeyup="somenteNumeros(this);" OnKeyPress="formatar('###.###.###-##', this)" placeholder="CPF" required>
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
					<div class="form-row">

						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="cep" id="field01" placeholder="CEP" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="cidade" id="field02" placeholder="Cidade" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="bairro" id="field03" placeholder="Bairro" required>
							<div class="invalid-feedback valid_perso">
								Esse campo não pode está vazio!
							</div>
						</div>


						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="endereco" id="field03" placeholder="Endereço" required>
							<div class="invalid-feedback valid_perso">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="numero" id="field03" placeholder="Número" required>
							<div class="invalid-feedback valid_perso">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-perso form-control" name="complemento" id="field07"  placeholder="Complemento">
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
					</div>
					<h4 style="margin-bottom: 20px">Dados do Negócio</h4>
					<div class="form-row">
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="razao" id="field01" placeholder="Razão Social" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="nomef" id="field02" placeholder="Nome Fantasia" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="cnpj" id="CNPJ" onkeyup="somenteNumeros(this);" OnKeyPress="//formatar('###.###.###-##', this)" placeholder="CNPJ" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-perso form-control" name="telefoneEmp" id="field07" maxlength="13" onkeyup="somenteNumeros(this);" OnKeyPress="formatar('##.####-#####', this)" placeholder="Telefone (empresarial)" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
					</div>
					<div class="form-row">

							<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
								<input type="text" class="form-control" name="cep_emp" id="field01" placeholder="CEP" required>
								<div class="invalid-feedback valid_perso ">
									Esse campo não pode está vazio!
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
								<input type="text" class="form-control" name="cidade_emp" id="field02" placeholder="Cidade" required>
								<div class="invalid-feedback valid_perso ">
									Esse campo não pode está vazio!
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
								<input type="text" class="form-control" name="bairro_emp" id="field03" placeholder="Bairro" required>
								<div class="invalid-feedback valid_perso">
									Esse campo não pode está vazio!
								</div>
							</div>


							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-2">
								<input type="text" class="form-control" name="cidade_emp" id="field03" placeholder="Endereço" required>
								<div class="invalid-feedback valid_perso">
									Esse campo não pode está vazio!
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
								<input type="text" class="form-control" name="numero_emp" id="field03" placeholder="Número" required>
								<div class="invalid-feedback valid_perso">
									Esse campo não pode está vazio!
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
								<input type="text" class="form-perso form-control" name="complemento_emp" id="field07"  placeholder="Complemento">
								<div class="invalid-feedback valid_perso ">
									Esse campo não pode está vazio!
								</div>
							</div>


					</div>
					<h4 style="margin-bottom: 25px">Dados do(s) Stand(s)</h4>
					<div class="form-row">

						<select class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-2 mb-2 selectpicker" data-live-search="true" id="stands" name="stands[]" multiple onchange="total_stands()" title="Escolha seus Stands, observando a numeração na imagem no topo da página">

							<?php foreach ($stands as $stand){

								echo '<option value="'.$stand->standAREA.'">'.$stand->idSTANDS.'</option>';

							}?>

						</select>

						<input type="hidden" name="name_stands" id="name_stands">
						<input type="hidden" name="qtd_stands" id="qtd_stands">

						<select class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-2 mb-2 selectpicker" title="Escolha o tipo de montagem do seu Stand" id="tipo_pagamento" name="tipo_stand" onchange="total_stands()">


							<option value="1">Com montagem básica</option>
							<option value="0">Área livre</option>

						</select>

						<div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-perso form-control" name="total" id="total_stand" maxlength="13" placeholder="Valor">
						</div>

					</div>

					<h4 style="margin-bottom: 25px">Escolha forma de pagamento</h4>
					<div class="form-row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<div class="form-check">
									<div class="radio">
										<input type="radio" name="optradio" onchange="block(); total_stands()" value="0" checked style="width: auto; margin-left: 10px">
											<label style="margin-left: 10px">Negociação direta</label>
									</div>
									<div class="invalid-feedback" style="margin-top: 20px;">
										Você deve escolher uma forma de pagamento.
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<div class="form-check">
									<div class="radio">
										<input type="radio" name="optradio" onchange="block(); total_stands()" value="1" style="width: auto; margin-left: 10px"><label style="margin-left: 10px">PagSeguro (Crédito, Débito, Boleto)</label>
									</div>
									<div class="invalid-feedback" style="margin-top: 20px;">
										Você deve escolher uma forma de pagamento.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
							<div class="form-group">
								<div class="form-check">
									<input class="form-check-input form-perso" type="checkbox" value="" id="invalidCheck" style="width: 50px; margin-left:-28px; margin-top: 20px" required>
									<span class="form-check-label"  for="invalidCheck" style="position: relative; left: 25px; top: 20px;">
										Lí e declaro estar de acordo com as normas contratuais de regras padrão da promotora em seu <a href="<?=base_url('static/manualexpo.pdf')?>" target="_blank"><b>manual do Expositor</b></a>
									</span>
									<div class="invalid-feedback" style="margin-top: 20px;">
										Você deve aceitar os termos do regulamento antes de se inscrever.
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="form-row">
						<div class="col-xl-4 offset-xl-4 col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-12 col-12 " style="text-align: center; margin-top: 30px">
							<button class="site-btn" type="submit" style="margin-top: 20px;">Solicitar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
