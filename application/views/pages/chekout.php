<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
}
	
function validateForm() {
     var nome = document.forms["myform"]["nome"].value;
  if (nome == "" || nome == "NULL") {
    alert("Nome Obrigatório");
    return false;
  }
	var cpf = document.forms["myform"]["cpf"].value;
  if (cpf == "" || cpf == "NULL") {
    alert("CPF Obrigatório");
    return false;
  }
	else{
	cpf = cpf.replace(/[^\d]+/g,'');
	if (cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999"){
	   alert("CPF Inválido");
       return false;
	}
	}
	
	var data = document.forms["myform"]["data"].value;
  if (data == "" || data == "NULL") {
    alert("Data Obrigatório");
    return false;
  }
	var email = document.forms["myform"]["email"].value;
  if (email == "" || email == "NULL") {
    alert("E-mail Obrigatório");
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
</script>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
<header id="header" class="header-section">
		<div class="header-warp">
			<!-- logo -->
			<a href="/" class="site-logo">
				<img src="img/logo.png" width="260px" alt="">
			</a>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- Navigation Menu -->
			<ul class="main-menu">
				<li><a href="/">Home</a></li>
				<li><a href="#">Cursos/Palestras/Workshops</a></li>	
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="#">Contato</a></li>
			</ul>
		</div>
</header>
	<!-- Header section end -->

                                                
	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/3.jpg" >
		<div class="container text-center">
			<h2>Inscrições</h2>
		</div>
	</section>
	<!-- Page info section end -->


	<!-- Contact section -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="contact-title">Faça sua inscrição</h2>
					<form class="contact-form" name="myform" action="" onsubmit="return validateForm()" method="post">
						<div class="row">
							<div class="col-md-6">
								<input type="text" placeholder="Nome Completo*" name="nome">
							</div>
							<div class="col-md-6">
								<input type="text" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)" placeholder="CPF*" name="cpf">
							</div>
							<div class="col-md-6">
								<input type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" placeholder="Data de Nascimento*" name="data">
							</div>
							<div class="col-md-6">
								<input type="email" placeholder="E-mail*" name="email">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Cidade*" name="cidade">
							</div>
							<div class="col-md-6">
								<input type="text" maxlength="13" OnKeyPress="formatar('##-####-#####', this)" placeholder="Telefone de Contato" name="telefone">
							</div>
							<div class="col-md-12">
<h4>Selecione o Curso, Palestra ou Workshop Desejado</h4>		
<select class="col-md-12" class="custom-select" style="margin-top: 5px" name="curso">
    <option value="">Selecione...</option>  
  <optgroup label="Cursos">
	<option value="1">Volvo</option>
    <option value="2">Saab</option>
  </optgroup>
  <optgroup label="Workshops">
    <option value="3">Mercedes</option>
    <option value="4">Audi</option>
  </optgroup>
</select>
								<button type="submit" style="margin-top: 40px" class="site-btn">Enviar Inscrição</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->
    </body>