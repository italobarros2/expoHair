        <footer id="footer" class="footer-section set-bg" data-setbg="<?=base_url('static/img/footer-bg.jpg')?>">
            <div class="footer-warp">
                <div class="footer-widgets">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7">
                            <div class="row">
                                <div class="col-xl-4 col-lg-5 col-md-6">
                                    <div class="footer-widget about-widget">
                                        <img src="img/logo.png" width="200" alt="">
                                        <p>Congresso e Feira ExpoHair. Beleza, cabelo, bem-estar, saúde, unhas, cosméticos, perfumaria</p>
                                        <div class="fw-social">
                                            <a href="https://www.instagram.com/congressoefeiraexpohair_/"><i class="fa fa-instagram"></i> @congressoefeiraexpohair_</a>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 offset-xl-2 offset-lg-1 offset-md-0">
                                    <div class="footer-widget list-widget">
                                        <h4 class="fw-title"><i class="flaticon-009-makeup-5"></i>Principais Serviços</h4>
                                        <ul>
                                            <li><a href="noivas.php">Noivas</a></li>
                                            <li><a href="barbeiro.php">Barbeiro</a></li>
                                            <li><a href="#">Manicure</a></li>
                                            <li><a href="#">Pedicure</a></li>
                                            <li><a href="#">Cabelo</a></li>
                                            <li><a href="#">Barbeiro</a></li>
                                            <li><a href="#">Spa</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Massagem</a></li>
                                            <li><a href="#">Cosméticos </a></li>
                                            <li><a href="#">Perfumaria</a></li>
                                            <li><a href="#">Saúde</a></li>
                                            <li><a href="#">Farmácia</a></li>
                                            <li><a href="#">Bem - Estar</a></li>
                                            <li><a href="#">Detox</a></li>
                                        </ul>
                                    </div> 
                                </div>
                            </div>	
                        </div>
                        <div class="col-xl-4 col-lg-5 offset-xl-1 offset-lg-0 offset-md-0">
                            <div class="footer-widget contact-widget">
                                <h4 class="fw-title"><i class="flaticon-039-make-up"></i>Entre em Contato</h4>
                                <form class="fw-contact-form" action="envio.php" method="post">
                                    <div class="cf-inputs">
                                        <div class="cf-input">
                                            <input type="text" name="nome" placeholder="Nome*">
                                        </div>
                                        <div class="cf-input">
                                            <input type="email" name="email" class="cf-input" placeholder="E-mail*">
                                        </div>
                                        <div class="cf-input">
                                            <input type="text" name="assunto" class="cf-input" placeholder="Assunto">
                                        </div>
                                        <div class="cf-input">
                                            <input type="text" name="data" maxlength="10" OnKeyPress="formatar('##/##/####', this)" placeholder="Data">
                                        </div>
                                    </div>
                                    <textarea id="mensagem" name="mensagem" placeholder="Mensagem*"></textarea>
                                    <button type="submit" class="site-btn">Enviar</button>
                                    <span>&nbsp; *Campo Obrigatório</span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="#">Cursos/Palestras/Workshops</a></li>
                            <li><a href="sobre.php">Sobre</a></li>
                            <li><a href="#">Contato</a></li>
                            <li><a href="mapa.php">Planta</a></li>
                        </ul>
                    </div>
                    <div class="copyright">
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Site feito com <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="#">LABOHOU</a></p>
                    </div>
                </div>
            </div>
        </footer>


    <!--====== Javascripts & Jquery ======-->
        <script src="<?=base_url('static/js/jquery-3.2.1.min.js')?>"></script>
        <script src="<?=base_url('static/js/jquery-ui.min.js')?>"></script>
        <script src="<?=base_url('static/js/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('static/js/owl.carousel.min.js')?>"></script>
        <script src="<?=base_url('static/js/circle-progress.min.js')?>"></script>
        <script src="<?=base_url('static/js/main.js')?>"></script>
		<script src="<?=base_url('static/assets/vendor/multi-select/js/jquery.multi-select.js')?>"></script>
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
			$('.my-select, #pre-selected-options').multiSelect()
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
			$('#custom-headers').multiSelect({
				selectableHeader: "<div class='custom-header'>Selectable items</div>",
				selectionHeader: "<div class='custom-header'>Selection items</div>",
				selectableFooter: "<div class='custom-header'>Selectable footer</div>",
				selectionFooter: "<div class='custom-header'>Selection footer</div>"
			});
		</script>

		<script>

			function formCad(){

				var field1 = $('#field1').val();
				var field2 = $('#field2').val();
				var field3 = $('#field3').val();
				var field4 = $('#field4').val();
				var field5 = $('#field5').val();
				var field6 = $('#field6').val();
				var field7 = $('#field7').val();
				var field8 = $('#field08').val();
				var field9 = $('#field09').val();
				var field10 = $('#field10').val();
				var field11 = $('#field11').val();

				$.ajax({ url: 'http://localhost/expohair/submitcongress',
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

    </body>
</html>
