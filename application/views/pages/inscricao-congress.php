<section class="form-sec contact-section spad ">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="contact-title">Faça sua inscrição</h2>
				<form class="needs-validation contact-form" action="<?= base_url('submitcongress')?>" method="post" novalidate>
					<div class="form-row">
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="inptsel form-control" name="nome" id="field01" placeholder="Nome Completo" required>
							<div class="invalid-feedback valid_perso">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="inptsel form-control" name="email" id="field02" placeholder="E-mail" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="inptsel form-control" name="cpf" id="field03" placeholder="CPF" required>
							<div class="invalid-feedback valid_perso ">
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
							<input type="text" class="inptsel form-control" name="cidade" id="field05" placeholder="Cidade" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="inptsel form-control" name="bairro" id="field06" placeholder="Bairro" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-perso inptsel form-control" name="telefone" id="field07" placeholder="Telefone (preferência Whatsapp)" required>
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
