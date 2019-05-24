<script type="text/javascript">
	function id( el ){
		return document.getElementById( el );
	}
	window.onload = function(){
		id('mais').onclick = function(){
			if(id('format').value < 3){
				id('format').value = parseInt( id('format').value )+1;
			}

			id('total').value = 110*id('format').value;
		}
		id('menos').onclick = function(){
			if( id('format').value>0 )
				id('format').value = parseInt( id('format').value )-1;

			id('total').value = 110*id('format').value;
		}
	}
</script>
<!-- Page info section -->
<section class="page-info-section set-bg" data-setbg="<?=base_url('static/img/page-top-bg/2.jpg')?>" >
	<div class="container text-center">
		<h2>Ingressos Shows</h2>
	</div>
</section>

<script>
	$('#myModal').on('shown.bs.modal', function () {
		$('#myInput').trigger('focus')
	})
</script>

<script type="text/javascript">

	function troca() {
		$("#ingressoSabadoMeia1").val($("#ingressoSabadoMeia").val());
		$("#ingressoDomingoMeia1").val($("#ingressoDomingoMeia").val());
		$("#ingressoSegundaMeia1").val($("#ingressoSegundaMeia").val());
		$("#ingressoSabadoInteira1").val($("#ingressoSabadoInteira").val());
		$("#ingressoDomingoInteira1").val($("#ingressoDomingoInteira").val());
		$("#ingressoSegundaInteira1").val($("#ingressoSegundaInteira").val());

	};

</script>

<!-- Page info section end -->


<!-- Blog section -->
<section class="blog-section spad">
	<div class="container">
		<div class="row">
			<div class="col-xl-9 col-lg-8">
				<!-- blog item -->

				<div class="blog-item">
					<div class="blog-thumb set-bg" data-setbg="<?=base_url('static/img/shows/img-show1.jpg')?>">
					</div>
					<div class="blog-content">
						<h3>Ingressos dia 13/07</h3>
						<div class="blog-meta"><a href="#">A partir de R$110,00</a>|<a href="#">Acesso ao show do dia 13/07</a></div>
						<div class="item" id="item" style="padding:16px" >
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6" style="margin-bottom: 15px">
									<span style="font-size: 18px">Ingresso - Individual (Meia)</span>
									<span style="float:right;font-size: 18px">R$ 110,00</span>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
									<div class="input-group" style="bottom: 5px; left: 25px">

                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  style="width: 20%; margin-right: 5px" data-type="minus" data-field="">
                                          <span class="glyphicon glyphicon-plus-sign" aria-hidden="true">-</span>
                                        </button>

										<input type="text" id="quantity" name="quantity" style="width: 40%; text-align: center;" class=" input-number" value="0" min="1" max="100">

                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" style="width: 20%; margin-left: 5px" data-type="plus" data-field="">
                                            <span class="glyphicon glyphicon-plus">+</span>
                                        </button>

									</div>
								</div>

								<!--<div class="qntIng">
                                    <input class="btn-menos" type="button" name="menos" id="menos" value="-" />
                                    <input class="qnt-n" type="text" name="num" value="0" id="ingressoSabadoMeia" size="2" disabled="disabled" />
                                    <input class="btn-mais" type="button" name="mais" id="mais" value="+" />
                                </div>-->
							</div>
						</div>
						<div class="item" id="item">
							<div class="row">
								<div class="produto-title">Ingresso - Individual (Inteira)</div>
								<div class="valor-title">R$ 220,00</div>
								<div class="qntIng">
									<input class="btn-menos" type="button" name="menos" id="menos" value="-" />
									<input class="qnt-n" type="text" id="ingressoSabadoInteira" value="0" id="format" size="2" disabled="disabled" />
									<input class="btn-mais" type="button" name="mais" id="mais" value="+" />
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="blog-item">
					<div class="blog-thumb set-bg" data-setbg="<?=base_url('static/img/shows/img-show2.jpg')?>">
					</div>
					<div class="blog-content">
						<h3>Ingressos dia 14/07</h3>
						<div class="blog-meta"><a href="#">A partir de R$110,00</a>|<a href="#">Acesso ao show do dia 14/07</a></div>

						<div class="item" id="item">
							<div class="row">
								<div class="produto-title">Ingresso - Individual (Meia)</div>
								<div class="valor-title">R$ 110,00</div>
								<div class="qntIng">
									<input class="btn-menos" type="button" name="menos" id="menos" value="-" />
									<input class="qnt-n" type="text" id="ingressoDomingoMeia" value="0" id="format" size="2" disabled="disabled" />
									<input class="btn-mais" type="button" name="mais" id="mais" value="+" />
								</div>
							</div>
						</div>
						<div class="item" id="item">
							<div class="row">
								<div class="produto-title">Ingresso - Individual (Inteira)</div>
								<div class="valor-title">R$ 220,00</div>
								<div class="qntIng">
									<input class="btn-menos" type="button" name="menos" id="menos" value="-" />
									<input class="qnt-n" type="text" id="ingressoDomingoInteira" value="0" id="format" size="2" disabled="disabled" />
									<input class="btn-mais" type="button" name="mais" id="mais" value="+" />
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="blog-item">
					<div class="blog-thumb set-bg" data-setbg="<?=base_url('static/img/shows/img-show3.jpg')?>">
					</div>
					<div class="blog-content">
						<h3>Ingressos dia 15/07</h3>
						<div class="blog-meta"><a href="#">A partir de R$110,00</a>|<a href="#">Acesso ao show do dia 15/07</a></div>

						<div class="item" id="item">
							<div class="row">
								<div class="produto-title">Ingresso - Individual (Meia)</div>
								<div class="valor-title">R$ 110,00</div>
								<div class="qntIng">
									<input class="btn-menos" type="button" id="ingressoSegundaMeia" id="menos" value="-" />
									<input class="qnt-n" type="text" name="format" value="0" id="format" size="2" disabled="disabled" />
									<input class="btn-mais" type="button" name="mais" id="mais" value="+" />
								</div>
							</div>
						</div>
						<div class="item" id="item">
							<div class="row">
								<div class="produto-title">Ingresso - Individual (Inteira)</div>
								<div class="valor-title">R$ 220,00</div>
								<div class="qntIng">
									<input class="btn-menos" type="button" name="menos" id="menos" value="-" />
									<input class="qnt-n" type="text" id="ingressoSegundaInteira" value="0" id="format" size="2" disabled="disabled" />
									<input class="btn-mais" type="button" name="mais" id="mais" value="+" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="blog-item">
					<div class="blog-thumb set-bg" data-setbg="<?=base_url('static/img/shows/todos.jpg')?>">
					</div>
					<div class="blog-content">
						<h3>Combo Ingressos 3 Dias</h3>
						<div class="blog-meta"><a href="#">A partir de R$270,00</a>|<a href="#">Acesso aos shows dos 3 dias</a></div>

						<div class="item" id="item">
							<div class="row">
								<div class="produto-title">Combo - Ingresso (Meia)</div>
								<div class="valor-title">R$ 270,00</div>
								<div class="qntIng">
									<input class="btn-menos" type="button" id="ingressoSegundaMeia" id="menos" value="-" />
									<input class="qnt-n" type="text" name="format" value="0" id="format" size="2" disabled="disabled" />
									<input class="btn-mais" type="button" name="mais" id="mais" value="+" />
								</div>
							</div>
						</div>
						<div class="item" id="item">
							<div class="row">
								<div class="produto-title">Combo - Ingresso (Inteira)</div>
								<div class="valor-title">R$ 540,00</div>
								<div class="qntIng">
									<input class="btn-menos" type="button" name="menos" id="menos" value="-" />
									<input class="qnt-n" type="text" id="ingressoSegundaInteira" value="0" id="format" size="2" disabled="disabled" />
									<input class="btn-mais" type="button" name="mais" id="mais" value="+" />
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="container-fluid">
									<form class="needs-validation contact-form" action="<?=base_url('teste')?>" method="post"  novalidate>
										<div class="form-row">
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">

												<input type="hidden" id = "ingressoSabadoMeia1" name="num1">
												<input type="hidden" id = "ingressoSabadoInteira1" name="num2">
												<input type="hidden" id = "ingressoDomingoInteira1" name="num4">
												<input type="hidden" id = "ingressoSegundaInteira1" name="num6">
												<input type="hidden" id = "ingressoDomingoMeia1" name="num3">
												<input type="hidden" id = "ingressoSegundaMeia1" name="num5">

												<input type="text" class="inptsel form-control" name="nome" id="field01" placeholder="Nome Completo" required>
												<div class="invalid-feedback valid_perso">
													Esse campo não pode está vazio!
												</div>
											</div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
												<input type="text" class="inptsel form-control" name="email" id="field02" placeholder="E-mail" required>
												<div class="invalid-feedback valid_perso ">
													Esse campo não pode está vazio!
												</div>
											</div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
												<input type="text" class="inptsel form-control" name="cpf" id="field03" placeholder="CPF" required>
												<div class="invalid-feedback valid_perso ">
													Esse campo não pode está vazio!
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="col-xl-12 col-lg-12	 col-md-12 col-sm-12 col-12">
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
											<div class="col-xl-12 col-lg-12	 col-md-12 col-sm-12 col-12 mb-2">
												<input type="text" class="inptsel form-control" name="cidade" id="field05" placeholder="Cidade" required>
												<div class="invalid-feedback valid_perso ">
													Esse campo não pode está vazio!
												</div>
											</div>
											<div class="col-xl-12 col-lg-12	 col-md-12 col-sm-12 col-12 mb-2">
												<input type="text" class="inptsel form-control" name="bairro" id="field06" placeholder="Bairro" required>
												<div class="invalid-feedback valid_perso ">
													Esse campo não pode está vazio!
												</div>
											</div>
											<div class="col-xl-12 col-lg-12	 col-md-12 col-sm-12 col-12 mb-2">
												<input type="text" class="form-perso inptsel form-control" name="telefone" id="field07" placeholder="Telefone (preferência Whatsapp)" required>
												<div class="invalid-feedback valid_perso ">
													Esse campo não pode está vazio!
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Save changes</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

				<button type="button" class="site-btn" onclick="troca()" data-toggle="modal" data-target="#formModal" style="margin-top: 30px;">Comprar</button>

			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 sidebar">
				<div class="sb-widget">
					<h5 class="sbw-title" style="color: #e22b63"><strong>Atrações</strong></h5>
					<ul>
						<li><strong>13/Julho - Sábado</strong></li>
						<li>- Fábio Jr.</li>
						<li>- Noda de Caju</li>
						<li>- Laninha</li>
						<li><strong>14/Julho - Domingo</strong></li>
						<li>- Samyra Show e Forró 100%</li>
						<li>- Forró Real</li>
						<li>- Forró da Diretoria</li>
						<li><strong>15/Julho - Segunda</strong></li>
						<li>- Ludmilla</li>
						<li>- Junior Vianna</li>
						<li>- Taty Girl</li>
					</ul>
				</div>
				<div class="sb-widget">
					<h5 class="sbw-title" style="color: #e22b63"><strong>Descrição</strong></h5>
					<ul>
						<li>Aqui escrevemos uma breve descrição do evento e dos showsn quanto mais linhas mais completo fica a descrição</li>
					</ul>
				</div>

				<div class="sb-widget">
					<h5 class="sbw-title" style="color: #e22b63"><strong>Informações</strong></h5>
					<ul>
						<li>Aqui escrevemos as principais informações dos shows, horários, dias e etc.</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</section>
