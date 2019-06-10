<section class="form-sec contact-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="contact-title">Inscrição</h2>

				<form class="needs-validation contact-form" name="myform" action="<?=base_url('submitVendorBattle')?>"  method="post" novalidate>
					<h4 style="margin-bottom: 20px">Dados do Participante</h4>
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
					<div class="form-row"style="margin-bottom: 20px">
						<div class="col-xl-1 col-lg-1 col-md-1"></div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
							<div class="card">
								<h5 class="card-header">Categorias - Clique nas categorias que você deseja participar.</h5>
								<div class="card-body">
									<select multiple="multiple" id="my-select" name="categorias_select[]">
										<?php foreach ($categorias as $categoria){
											echo '
												<option value="'.$categoria->idCATEGORIA.'">'.$categoria->nome_categoria.' - preço: R$<b>'.$categoria->preco.'</b></option>
											';
										}
										?>
									</select>
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
										Lí e declaro estar de acordo com o regulamento da <a href="<?=base_url('static/batalha.pdf')?>" target="_blank"><b>Batalha dos barbeiros</b></a>
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
							<button class="site-btn" type="submit" style="margin-top: 20px;">Inscrever</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
