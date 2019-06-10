<section class="form-sec contact-section spad">

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="contact-title" style="text-align: center; margin-top: -100px; margin-bottom: 100px">Ganhe um Convite para o acesso aos 3 dias de Feira do evento ExpoHair 2019!</h2>

				<form class="needs-validation contact-form" name="myform" action="<?=base_url('processaConvite')?>"  onsubmit="return validateForm()" method="post" novalidate>
					<h4 style="margin-bottom: 20px">Dados do Participante</h4>
					<div class="form-row">
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-control" name="nome" id="field01" placeholder="Nome Completo" required>
							<div class="invalid-feedback valid_perso ">
								Esse campo não pode está vazio!
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
							<input type="email" class="form-control" name="email" id="field02" placeholder="E-mail (Onde receberar o convite)" required>
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
					<h4 style="margin-bottom: 25px">Sou profissional na área de: </h4>

						<div class="row">
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
								<div class="form-group">
									<select class="selectpicker form-control" style="border:none; border-bottom: 2px solid #e3e3e3;margin-bottom: 20px; width: 100%;" name="prof[]" id="profs" onchange="showOutros()" title="Selecione" multiple required>
										<option value="1">Cabeleireiro</option>
										<option value="2">Barbeiro</option>
										<option value="3">Esteticista</option>
										<option value="4">Médico</option>
										<option value="5">Químico</option>
										<option value="6">Industrial</option>
										<option value="7">Representante</option>
										<option value="8">Distribuidor</option>
										<option value="9">Logista</option>
										<option value="10">Imprensa</option>
										<option value="11">Outros</option>
									</select>
									<div class="invalid-feedback valid_perso" style="margin-top: -4px !important">Deve-se escolher dentre as opções acima.</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-2">
								<input type="text" class="form-perso form-control" name="outros" id="outros"  placeholder="Qual área?">
							</div>
							<script>

								$('#outros').hide();

							</script>
						</div>
					<h4 style="margin-bottom: 25px; margin-top: 50px">Fui convidado por: </h4>
					<div class="form-row">
						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
							<input type="text" class="form-perso form-control" name="inviter" id="inviter"  placeholder="Digite o nome do profissional que convidou você: ">
						</div>
					</div>

					<div class="form-row">
						<div class="col-xl-4 offset-xl-4 col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-12 col-12 " style="text-align: center; margin-top: 30px">
							<button class="site-btn" type="submit" style="margin-top: 20px;">Receber o convite!</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
