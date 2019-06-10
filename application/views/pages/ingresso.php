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
		$("#ingressoSabadoMeia1").val($("#quantity1").val());
		$("#ingressoDomingoMeia1").val($("#quantity3").val());
		$("#ingressoSegundaMeia1").val($("#quantity5").val());
		$("#ingressoSabadoInteira1").val($("#quantity2").val());
		$("#ingressoDomingoInteira1").val($("#quantity4").val());
		$("#ingressoSegundaInteira1").val($("#quantity6").val());
		$("#ingressoTodos").val($("#quantity7").val());

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

						<img class="blog-thumb" src="<?=base_url('static/img/shows/banner_sabado.jpg')?>">

					<div class="blog-content">
						<h3>Ingressos dia 13/07</h3>
						<div class="blog-meta"><a href="javascript:void(0);">A partir de R$<?php echo $lote1->preco?>.00</a>|<a href="javascript:void(0)">Acesso ao show do dia 13/07</a></div>
						<div class="item" id="item" style="padding:16px" >
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6" style="margin-bottom: 15px">
									<span style="font-size: 18px">Ingresso - Sábado 13/07 (1º Lote Promocional)</span>
									<span style="float:right;font-size: 18px"><?php echo 'R$'.$lote1->preco.'.00'?></span>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
									<div class="input-group" style="bottom: 5px; left: 25px">

										<button type="button" onclick="menosUM('#quantity1')" class="quantity-left-minus btn btn-danger btn-number"  style="width: 20%; margin-right: 5px" data-type="minus" data-field="">
											<span class="glyphicon glyphicon-plus-sign" aria-hidden="true">-</span>
										</button>

										<input type="text" id="quantity1" name="quantity1" style="width: 40%; text-align: center;" class=" input-number" value="0" min="0" max="3">

										<button type="button" onclick="maisUM('#quantity1')" class="quantity-right-plus btn btn-success btn-number" style="width: 20%; margin-left: 5px" data-type="plus" data-field="">
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
						<!--<div class="item" id="item" style="padding:16px" >
						<div class="row">
							<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6" style="margin-bottom: 15px">
								<span style="font-size: 18px">Ingresso - Individual (Inteira)</span>
								<span style="float:right;font-size: 18px">< ?php echo 'R$'.(2*$lote1->preco).'.00'?></span>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<div class="input-group" style="bottom: 5px; left: 25px">

									<button type="button" onclick="menosUM('#quantity2')" class="quantity-left-minus btn btn-danger btn-number"  style="width: 20%; margin-right: 5px" data-type="minus" data-field="">
										<span class="glyphicon glyphicon-plus-sign" aria-hidden="true">-</span>
									</button>

									<input type="text" id="quantity2" name="quantity2" style="width: 40%; text-align: center;" class=" input-number" value="0" min="0" max="3">

									<button type="button" onclick="maisUM('#quantity2')" class="quantity-right-plus btn btn-success btn-number" style="width: 20%; margin-left: 5px" data-type="plus" data-field="">
										<span class="glyphicon glyphicon-plus">+</span>
									</button>

								</div>
							</div>

							<div class="qntIng">
                                <input class="btn-menos" type="button" name="menos" id="menos" value="-" />
                                <input class="qnt-n" type="text" name="num" value="0" id="ingressoSabadoMeia" size="2" disabled="disabled" />
                                <input class="btn-mais" type="button" name="mais" id="mais" value="+" />
                            </div>
						</div>
					</div>-->
				</div>
			</div>

				<div class="blog-item">
					<img class="blog-thumb" src="<?=base_url('static/img/shows/banner_domingo.jpg')?>">
					<div class="blog-content">
						<h3>Ingressos dia 14/07</h3>
						<div class="blog-meta"><a href="javascript:void(0);">A partir de R$<?php echo $lote2->preco?>.00</a>|<a href="#">Acesso ao show do dia 14/07</a></div>
						<div class="item" id="item" style="padding:16px" >
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6" style="margin-bottom: 15px">
									<span style="font-size: 18px">Ingresso - Domingo 14/07 (1º Lote Promocional)</span>
									<span style="float:right;font-size: 18px"><?php echo 'R$'.(1*$lote2->preco).'.00'?></span>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
									<div class="input-group" style="bottom: 5px; left: 25px">

										<button type="button" onclick="menosUM('#quantity3')" class="quantity-left-minus btn btn-danger btn-number"  style="width: 20%; margin-right: 5px" data-type="minus" data-field="">
											<span class="glyphicon glyphicon-plus-sign" aria-hidden="true">-</span>
										</button>

										<input type="text" id="quantity3" name="quantity3" style="width: 40%; text-align: center;" class=" input-number" value="0" min="0" max="3">

										<button type="button" onclick="maisUM('#quantity3')" class="quantity-right-plus btn btn-success btn-number" style="width: 20%; margin-left: 5px" data-type="plus" data-field="">
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
						<!--<div class="item" id="item" style="padding:16px" >
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6" style="margin-bottom: 15px">
									<span style="font-size: 18px">Ingresso - Individual (Inteira)</span>
									<span style="float:right;font-size: 18px">< ?php echo 'R$'.(2*$lote2->preco).'.00'?></span>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
									<div class="input-group" style="bottom: 5px; left: 25px">

										<button type="button" onclick="menosUM('#quantity4')" class="quantity-left-minus btn btn-danger btn-number"  style="width: 20%; margin-right: 5px" data-type="minus" data-field="">
											<span class="glyphicon glyphicon-plus-sign" aria-hidden="true">-</span>
										</button>

										<input type="text" id="quantity4" name="quantity4" style="width: 40%; text-align: center;" class=" input-number" value="0" min="0" max="3">

										<button type="button" onclick="maisUM('#quantity4')" class="quantity-right-plus btn btn-success btn-number" style="width: 20%; margin-left: 5px" data-type="plus" data-field="">
											<span class="glyphicon glyphicon-plus">+</span>
										</button>

									</div>
								</div>

								<div class="qntIng">
                                    <input class="btn-menos" type="button" name="menos" id="menos" value="-" />
                                    <input class="qnt-n" type="text" name="num" value="0" id="ingressoSabadoMeia" size="2" disabled="disabled" />
                                    <input class="btn-mais" type="button" name="mais" id="mais" value="+" />
                                </div>
							</div>
						</div>-->
					</div>
				</div>
				<div class="blog-item">
					<img class="blog-thumb" src="<?=base_url('static/img/shows/banner_segunda.jpg')?>">
					<div class="blog-content">
						<h3>Ingressos dia 15/07</h3>
						<div class="blog-meta"><a href="javascript:void(0);">A partir de R$<?php echo $lote3->preco?>.00</a>|<a href="#">Acesso ao show do dia 15/07</a></div>
						<div class="item" id="item" style="padding:16px" >
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6" style="margin-bottom: 15px">
									<span style="font-size: 18px">Ingresso - Segunda 15/07 (1º Lote Promocional)</span>
									<span style="float:right;font-size: 18px"><?php echo 'R$'.(1*$lote3->preco).'.00'?></span>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
									<div class="input-group" style="bottom: 5px; left: 25px">

										<button type="button" onclick="menosUM('#quantity5')" class="quantity-left-minus btn btn-danger btn-number"  style="width: 20%; margin-right: 5px" data-type="minus" data-field="">
											<span class="glyphicon glyphicon-plus-sign" aria-hidden="true">-</span>
										</button>

										<input type="text" id="quantity5" name="quantity5" style="width: 40%; text-align: center;" class=" input-number" value="0" min="0" max="3">

										<button type="button" onclick="maisUM('#quantity5')" class="quantity-right-plus btn btn-success btn-number" style="width: 20%; margin-left: 5px" data-type="plus" data-field="">
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
						<!--<div class="item" id="item" style="padding:16px" >
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6" style="margin-bottom: 15px">
									<span style="font-size: 18px">Ingresso - Individual (Inteira)</span>
									<span style="float:right;font-size: 18px">< ?php echo 'R$'.(2*$lote3->preco).'.00'?></span>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
									<div class="input-group" style="bottom: 5px; left: 25px">

										<button type="button" onclick="menosUM('#quantity6')" class="quantity-left-minus btn btn-danger btn-number"  style="width: 20%; margin-right: 5px" data-type="minus" data-field="">
											<span class="glyphicon glyphicon-plus-sign" aria-hidden="true">-</span>
										</button>

										<input type="text" id="quantity6" name="quantity6" style="width: 40%; text-align: center;" class=" input-number" value="0" min="0" max="3">

										<button type="button" onclick="maisUM('#quantity6')" class="quantity-right-plus btn btn-success btn-number" style="width: 20%; margin-left: 5px" data-type="plus" data-field="">
											<span class="glyphicon glyphicon-plus">+</span>
										</button>

									</div>
								</div>

								<div class="qntIng">
                                    <input class="btn-menos" type="button" name="menos" id="menos" value="-" />
                                    <input class="qnt-n" type="text" name="num" value="0" id="ingressoSabadoMeia" size="2" disabled="disabled" />
                                    <input class="btn-mais" type="button" name="mais" id="mais" value="+" />
                                </div>
							</div>
						</div>-->
					</div>
				</div>

				<div class="blog-item">
					<img class="blog-thumb" src="<?=base_url('static/img/shows/banner_geral.jpg')?>">
					<div class="blog-content">
						<h3>Pacote Promocional - Todos os dias de Shows</h3>
						<div class="blog-meta"><a href="javascript:void(0);">A partir de R$<?php echo $lote4->preco?>.00</a>|<a href="#">Acesso a todos os dias de evento</a></div>
						<div class="item" id="item" style="padding:16px" >
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-6" style="margin-bottom: 15px">
									<span style="font-size: 18px">Ingresso - Combo 3 Dias (1º Lote Promocional)</span>
									<span style="float:right;font-size: 18px"><?php echo 'R$'.(1*$lote4->preco).'.00'?></span>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
									<div class="input-group" style="bottom: 5px; left: 25px">

										<button type="button" onclick="menosUM('#quantity7')" class="quantity-left-minus btn btn-danger btn-number"  style="width: 20%; margin-right: 5px" data-type="minus" data-field="">
											<span class="glyphicon glyphicon-plus-sign" aria-hidden="true">-</span>
										</button>

										<input type="text" id="quantity7" name="quantity7" style="width: 40%; text-align: center;" class=" input-number" value="0" min="0" max="3">

										<button type="button" onclick="maisUM('#quantity7')"class="quantity-right-plus btn btn-success btn-number" style="width: 20%; margin-left: 5px" data-type="plus" data-field="">
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
					</div>
				</div>

			<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Dados cadastrais</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="container-fluid">
								<form class="needs-validation contact-form" name="myform" onsubmit="return validateForm()" action="<?=base_url('submitingressos')?>" method="post"  novalidate>
									<div class="form-row">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">

											<input type="hidden" id = "ingressoSabadoMeia1" name="num1">
											<input type="hidden" name="l1" value="<?php echo $lote1->lote?>">
											<input type="hidden" id = "ingressoSabadoInteira1" name="num2">
											<input type="hidden" name="l2" value="<?php echo 2*($lote1->preco)?>">
											<input type="hidden" id = "ingressoDomingoInteira1" name="num4">
											<input type="hidden" name="l4" value="<?php echo 2*($lote2->preco)?>">
											<input type="hidden" id = "ingressoSegundaInteira1" name="num6">
											<input type="hidden" name="l6" value="<?php echo 2*($lote3->preco)?>">
											<input type="hidden" id = "ingressoDomingoMeia1" name="num3">
											<input type="hidden" name="l3" value="<?php echo $lote2->lote?>">
											<input type="hidden" id = "ingressoSegundaMeia1" name="num5">
											<input type="hidden" name="l5" value="<?php echo $lote3->lote?>">
											<input type="hidden" id = "ingressoTodos" name="num7">
											<input type="hidden" name="l7" value="<?php echo ($lote4->lote)?>">

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
											<input type="text" class="inptsel form-control" name="cpf" id="field03" onkeyup="somenteNumeros(this);" OnKeyPress="formatar('###.###.###-##', this)" placeholder="CPF" required>
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
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
										<button type="submit" class="btn btn-primary">Ir para o pagamento</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div style="text-align: center">
				<button type="button" class="site-btn" onclick="troca()" data-toggle="modal" data-target="#formModal" style="margin-top: 30px;">Comprar</button>
			</div>

		</div>
		<div class="col-xl-3 col-lg-4 col-md-6 sidebar">
			<div class="sb-widget">
				<h5 class="sbw-title" style="color: #e22b63"><strong>Atrações</strong></h5>
				<ul>
					<li><strong>13/Julho - Sábado</strong></li>
					<li>- Fábio Jr.</li>
					<li>- Janaína Show</li>
					<li>- Luis Marcelo & Gabriel</li>
					<li><strong>14/Julho - Domingo</strong></li>
					<li>- Forró Real</li>
					<li>- Forró da Diretoria</li>
					<li>- Samyra Show e Forró 100%</li>
					<li><strong>15/Julho - Segunda</strong></li>
					<li>- Ludmilla</li>
					<li>- Junior Vianna</li>
					<li>- Taty Girl</li>
					<li>- Dj's</li>
				</ul>
			</div>
			<div class="sb-widget">
				<h5 class="sbw-title" style="color: #e22b63"><strong>Descrição</strong></h5>
				<ul>
					<li>Venha participar dos shows que vão animar as férias de Sobral - CE. Congresso ExpoHair trás grandes nomes da música nacional para fazer um evento cheio de alegria e emoções.  </li>
				</ul>
			</div>

			<div class="sb-widget">
				<h5 class="sbw-title" style="color: #e22b63"><strong>Informações</strong></h5>
				<ul>
					<li>Os shows tem ínicio às 22h dos seus respectivos dias</li>
				</ul>
			</div>
		</div>

	</div>
	</div>
</section>
