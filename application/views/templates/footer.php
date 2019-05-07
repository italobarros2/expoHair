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
