<script type="text/javascript">
function id( el ){
        return document.getElementById( el );
}
window.onload = function(){
        id('mais').onclick = function(){
                id('format').value = parseInt( id('format').value )+1;
                
                id('total').value = 110*id('format').value;
        }
        id('menos').onclick = function(){
                if( id('format').value>0 )
                        id('format').value = parseInt( id('format').value )-1;
                
                id('total').value = 110*id('format').value;
        }
}       
</script>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/2.jpg" >
		<div class="container text-center">
			<h2>Ingressos</h2>
		</div>
	</section>
	<!-- Page info section end -->


		<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8">
					<!-- blog item -->
					<div class="blog-item">
						<div class="blog-thumb set-bg" data-setbg="img/blog/img-shows.jpg">
							<div class="blog-date">13/Julho/2019</div>
						</div>
						<div class="blog-content">
							<h3>Ingressos dia 13/07</h3>
							<div class="blog-meta"><a href="#">A partir de R$110,00</a>|<a href="#">Acesso aos show do dia 13/07</a></div>
		
	    <div class="item" id="item">
			<div class="row">
		<div class="produto-title">Ingresso - Idividual (Meia)</div>
		<div class="valor-title">R$ 110,00</div>
		<div class="qntIng">
	    <input class="btn-menos" type="button" name="menos" id="menos" value="-" />
        <input class="qnt-n" type="text" name="format" value="0" id="format" size="2" />
	    <input class="btn-mais" type="button" name="mais" id="mais" value="+" />
		</div>
		    </div>
		</div>
		<div class="item" id="item">
			<div class="row">
		<div class="produto-title">Ingresso - Idividual (Inteira)</div>
		<div class="valor-title">R$ 110,00</div>
		<div class="qntIng">
	    <input class="btn-menos" type="button" name="menos" id="menos" value="-" />
        <input class="qnt-n" type="text" name="format" value="0" id="format" size="2" />
	    <input class="btn-mais" type="button" name="mais" id="mais" value="+" />
		</div>
		    </div>
		</div>
						
						</div>
					</div>
					<div class="blog-item">
						<div class="blog-thumb set-bg" data-setbg="img/blog/img-shows.jpg">
							<div class="blog-date">14/Julho/2019</div>
						</div>
						<div class="blog-content">
							<h3>Ingressos dia 14/07</h3>
							<div class="blog-meta"><a href="#">A partir de R$110,00</a>|<a href="#">Acesso aos show do dia 14/07</a></div>
							
		<div class="item" id="item">
			<div class="row">
		<div class="produto-title">Ingresso - Idividual (Meia)</div>
		<div class="valor-title">R$ 110,00</div>
		<div class="qntIng">
	    <input class="btn-menos" type="button" name="menos" id="menos" value="-" />
        <input class="qnt-n" type="text" name="format" value="0" id="format" size="2" />
	    <input class="btn-mais" type="button" name="mais" id="mais" value="+" />
		</div>
		    </div>
		</div>
		<div class="item" id="item">
			<div class="row">
		<div class="produto-title">Ingresso - Idividual (Inteira)</div>
		<div class="valor-title">R$ 110,00</div>
		<div class="qntIng">
	    <input class="btn-menos" type="button" name="menos" id="menos" value="-" />
        <input class="qnt-n" type="text" name="format" value="0" id="format" size="2" />
	    <input class="btn-mais" type="button" name="mais" id="mais" value="+" />
		</div>
		    </div>
		</div>
							
						</div>
					</div>
					<div class="blog-item">
						<div class="blog-thumb set-bg" data-setbg="img/blog/img-shows.jpg">
							<div class="blog-date">15/Julho/2019</div>
						</div>
						<div class="blog-content">
							<h3>Ingressos dia 15/07</h3>
							<div class="blog-meta"><a href="#">A partir de R$110,00</a>|<a href="#">Acesso aos show do dia 15/07</a></div>
							
		<div class="item" id="item">
			<div class="row">
		<div class="produto-title">Ingresso - Idividual (Meia)</div>
		<div class="valor-title">R$ 110,00</div>
		<div class="qntIng">
	    <input class="btn-menos" type="button" name="menos" id="menos" value="-" />
        <input class="qnt-n" type="text" name="format" value="0" id="format" size="2" />
	    <input class="btn-mais" type="button" name="mais" id="mais" value="+" />
		</div>
		    </div>
		</div>
		<div class="item" id="item">
			<div class="row">
		<div class="produto-title">Ingresso - Idividual (Inteira)</div>
		<div class="valor-title">R$ 110,00</div>
		<div class="qntIng">
	    <input class="btn-menos" type="button" name="menos" id="menos" value="-" />
        <input class="qnt-n" type="text" name="format" value="0" id="format" size="2" />
	    <input class="btn-mais" type="button" name="mais" id="mais" value="+" />
		</div>
		    </div>
		</div>
			<button class="site-btn" style="margin-top: 30px;">Comprar</button>
							
							
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 sidebar">
					<div class="sb-widget">
						<h5 class="sbw-title" style="color: #e22b63"><strong>Atrações</strong></h5>
						<ul>
							<li>Atração 1</li>
							<li>Atração 2</li>
							<li>Atração 3</li>
							<li>Atração 4</li>
							<li>Atração 5</li>
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
					<div class="sb-widget">
						<a href="#" class="add"><img src="img/add.jpg" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

    </body>