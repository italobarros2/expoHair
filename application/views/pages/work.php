<!DOCTYPE html>
<html lang="PT-br">
<head>
	<title>Congresso e Feira ExpoHair</title>
	<meta charset="UTF-8">
	<meta name="description" content="Site oficial Congresso e Feira Expohair">
	<meta name="keywords" content="diva, beauty, beleza, congresso">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="<?=base_url('static/img/favicon.ico')?>" rel="shortcut icon"/>

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?=base_url('static/css/bootstrap.min.css')?>"/>
	<link rel="stylesheet" href="<?=base_url('static/css/font-awesome.min.css')?>"/>
	<link rel="stylesheet" href="<?=base_url('static/css/jquery-ui.min.css')?>"/>
	<link rel="stylesheet" href="<?=base_url('static/css/flaticon.css')?>"/>
	<link rel="stylesheet" href="<?=base_url('static/css/owl.carousel.css')?>"/>
	<link rel="stylesheet" href="<?=base_url('static/css/style.css')?>"/>
	<link rel="stylesheet" href="<?=base_url('static/css/animate.css')?>"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
	
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
<header id="header" class="header-section">
		<div class="header-warp">
			<!-- logo -->
			<a href="index.php" class="site-logo">
				<img src="<?=base_url('static/img/logo.png')?>" width="250px" alt="">
			</a>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- Navigation Menu -->
			<ul class="main-menu">
				<li class="active"><a href="/">Home</a></li>
				<li><a href="#">Cursos/Palestras/Workshops</a></li>	
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="#">Contato</a></li>
				<li><a href="mapa.php">Planta</a></li>
			</ul>
			<div class="header-right">
				<a href="#" class="site-btn sb-line sb-big">(85) 9 9659 - 7500</a>
				<a href="#" class="site-btn sb-big">Inscrições</a>
			</div>
		</div>
</header>
	<!-- Header section end -->

                                                
	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?=base_url('static/img/bg.jpg')?>" >
		<div class="container">
			<div class="hero-slider owl-carousel">
				<!-- slider item -->
		<div class="hs-item">
					<div class="hs-content text-white">
						<h2>SUA CARREIRA<br>HUHUHUHUHHUH</h2>
						<p><h4>ExpoHair - 13 a 15 / Julho<br>Centro de Eventos de Sobral - CE.</h4></p>
						<p><h5>Visite nossos stands dos mais diversos setores do mundo da beleza. E participe dos nossos cursos, workshops e palestras.</h5></p>
						<a href="#" style="margin-top: 71px" class="site-btn sb-big">Inscreva-se</a>
					</div>
					<div class="hs-preview set-bg" data-setbg="<?=base_url('static/img/hero-slider/1.png')?>"></div>
		</div>
		<div class="hs-item">
					<div class="hs-content text-white">
						<h2>NOIVAS,<br>PENTEANDO COM CRIATIVIDADE.</h2>
						<p><h4>ExpoHair - 13 a 15 / Julho<br>Centro de Eventos de Sobral - CE.</h4></p>
						<p><h5>Mostrar penteados criativos  um caminho mais fácil do que você imagina... Junte-se a nós do ExpoHair e participe!</h5></p>
						<a href="/noivas.php" class="site-btn sb-big">Participe</a>
					</div>
					<div class="hs-preview set-bg" data-setbg="<?=base_url('static/img/hero-slider/noiva_1.png')?>"></div>
		</div>
        <div class="hs-item">
					<div class="hs-content text-white">
						<h2>BARBER HAIR.</h2>
						<p><h4>ExpoHair - 13 a 15 / Julho<br>Centro de Eventos de Sobral - CE.</h4></p>
						<p><h5>Ser um barbeiro nos dias de hoje significa muito mais do que ter um estabelecimento voltado exclusivamente para o público masculino. A profissão exige pesquisa de mercado, visão de negócio, mente aberta para apresentar inovações.</h5></p>
						<a href="barbeiro.php" style="margin-top: 171px" class="site-btn sb-big">Participe</a>
					</div>
					<div class="hs-preview set-bg" data-setbg="<?=base_url('static/img/hero-slider/barber_1.png')?>"></div>
		</div>
				<!-- slider item -->
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- intro section -->
	<section class="intro-section spad  set-bg" data-setbg="<?=base_url('static/img/intro-bg.jpg')?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="intro-content">
						<h2>Sobre a ExpoHair</h2>
						<p>O mercado dos salões de beleza, clínicas de estética, spas, da cidade de Sobral região serrana e cidades vizinhas é o alvo principal do CONGRESSO E FEIRA EXPO HAIR BEAUTY E DE NEGÓCIOS DA BELEZA, CABELOS, UNHAS, COSMÉTICOS, ESTÉTICA, PERFUMARIA, FARMÁCIA, SAÚDE E BEM-ESTAR. os EXPOSITORES apresentarão novos lançamentos de novos produtos, sinalizando todas as tendências, novas técnicas para promover excelentes negócios na área de beleza, saúde e bem–estar.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- intro section end -->


	<!-- Services section -->
	<section class="services-section spad set-bg" data-setbg="<?=base_url('static/img/service-bg.png')?>">
		<div class="container">
			<div class="section-title text-white">
				<h2>Principais Serviços</h2>
			</div>
			<div class="row">
				<!-- service -->
				<div class="col-lg-4 col-md-6 service text-white">
					<i class="flaticon-016-woman"></i>
					<h2>Salão Cabeleleiro</h2>
					<p>No ExpoHair você encontra tudo sobre Cabeleleiro que é um serviço ou estabelecimento comercial onde profissionais se dedicam a cortar, pentear, colorir e tratar os cabelos de clientes.</p>
				</div>
				<!-- service -->
				<div class="col-lg-4 col-md-6 service text-white">
					<i class="flaticon-017-soap"></i>
					<h2>Cosméticos</h2>
					<p>No ExpoHair você encontra tudo sobre Cosméticos, que é aquilo que é relativo à beleza humana. Alguns produtos de higiene pessoal podem ser considerados cosméticos. Substância ou tratamento aplicado à face ou a outras partes do corpo para alterar a aparência.</p>
				</div>
				<!-- service -->
				<div class="col-lg-4 col-md-6 service text-white">
					<i class="flaticon-009-makeup-5"></i>
					<h2>Manicure & Pedicure</h2>
					<p>No ExpoHair você encontra tudo sobre Manicure & Pedicure, que se consiste na profissional responsável por tratar das mãos e pés dos clientes, aparando, polindo e esmaltando suas unhas. Cuida da saúde e embelezamento das unhas das mãos e pés.</p>
				</div>
				<!-- service -->
				<div class="col-lg-4 col-md-6 service text-white"></div>
				<!-- service -->
				<div class="col-lg-4 col-md-6 service text-white">
					<i class="flaticon-048-makeup"></i>
					<h2>Make Up</h2>
					<p>No ExpoHair você encontra tudo sobre Make Up, que consiste na aplicação de produtos com efeito cosmético, de embelezamento, seguindo-se alguns casos os ditames da moda.</p>
				</div>
				<!-- service -->
				<div class="col-lg-4 col-md-6 service text-white">
					<i class="flaticon-045-eyelid"></i>
					<h2>Farmácia e Bem-Estar</h2>
					<p>No ExpoHair você encontra tudo sobre Farmácia e Bem-Estar com vários produtos de diversas marcas e locais para você conhecer.</p>
				</div>
				<!-- service -->
			</div>
		</div>
	</section>
	<!-- Services section end -->

	
	<!-- Testimonials section -->
	<section class="testimonials-section set-bg" data-setbg="<?=base_url('static/img/review-bg.jpg')?>">
		<div class="container">
			<div class="section-title mb-0">
				<h2>Novidades</h2>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="testimonials-slider owl-carousel">
						<!-- item -->
						<div class="ts-item">
						<h4>Dia 13/07/2019 - SHOW DE HUMOR</h4>
							<p>O ExpoHair tem o prazer de informar que no seu primeiro dia(13/07/2019), teremos show de humor com a presença dos humoristas LAILTINHO BREGA, ESCOLÁSTICA E AUGUSTO BONEQUEIRO. Não fique de fora!</p>
						<a href="lermais_humor.php" class="site-btn sb-line">Leia Mais</a>
							
						</div>						
						<!-- item -->
						<div class="ts-item">
						<h4>Dia 14/07/2019 - Workshop Saúde dos Pés</h4>
							<p>Horário: 13h às 17h - Participe dos nossos Cursos, Palestras e Workshops. Dia 14/03/2019 tem Workshop de Saúde dos Pés com Suzana Lima do Nascimento - PODOLOGA
							<br>Conteúdos: Ética e uso de E.P.Is
                            <br>* Unhas encravadas
                            <br>* Onicomicose
                            <br>* Pés de diabéticos</p>
						<button class="site-btn sb-line">Leia Mais</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonials section end -->


	<!-- brands section -->
	<div class="brands-section set-bg" data-setbg="<?=base_url('static/img/brands-bg.jpg')?>">
		<div class="brands-slider owl-carousel">
			<div class="bs-item">
				<h4 style="margin-top: 40px">Seja nosso Parceiro</h4>
			</div>
			<div class="bs-item">
				<h4 style="margin-top: 40px">Seja nosso Parceiro</h4>
			</div>
			<div class="bs-item">
				<img src="<?=base_url('static/img/brands/3.png')?>" alt="">
			</div>
			<div class="bs-item">
				<h4 style="margin-top: 40px">Seja nosso Parceiro</h4>
			</div>
			<div class="bs-item">
				<img src="<?=base_url('static/img/brands/5.png')?>" alt="">
			</div>
		</div>
	</div>
	<!--  brands section end -->

	<!-- Footer section -->
    
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="<?=base_url('static/js/jquery-3.2.1.min.js')?>"></script>
	<script src="<?=base_url('static/js/jquery-ui.min.js')?>"></script>
	<script src="<?=base_url('static/js/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('static/js/owl.carousel.min.js')?>"></script>
	<script src="<?=base_url('static/js/circle-progress.min.js')?>"></script>
	<script src="<?=base_url('static/js/main.js')?>"></script>

    </body>
</html>