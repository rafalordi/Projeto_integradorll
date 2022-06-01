
<?php

session_start();



echo '<html lang="en">
<head>
<link rel="icon" 
      type="image/png" 
      href="fotos/ícone.png">
<title>HelperTec</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!--gallery pop-up-css file -->
<link rel="stylesheet" href="css/chocolat.css" type="text/css">
<!-- // gallery pop-up-css file -->

<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
</head>
<body>
	<!-- banner -->
	<div class="banner">
	<div class="agile_dot_info">
		<div class="w3-header-bottom">
		<div class="container">
			<div class="w3layouts-logo">
				<h1>
					<a href="index.html">HelperTec </a>
				</h1>
			</div>
			<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="first-list"><a class="active" href="indexpessoaladm.php">Página Inicial</a></li>
									<li><a href="perfilpessoaladm.php">'.$_SESSION["nome"].'</a></li>
									<li><a href="consultarDenunciaAdm.php">Consultar Denúncias</a></li>
									<li><a href="logout.php">Sair</a></li>
									
										</ul>
									</li>

									
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
			</div>
			<div class="agileinfo-social-grids">
				<ul>
					<li><a href="https://www.facebook.com/Definir-111116794904391"><i class="fa fa-facebook"></i></a></li>
				
				</ul>
			</div>
			<div class="agileinfo-social-grids2">
				<!-- <ul>
					<li><a href="https://univesp.br"><i class="fa fa-facebook"></i></a></li>
				
				</ul> -->
			</div>
			<div class="clearfix"> </div>
			</div>
		</div>
		<div class="banner-info">
			<div class="container">
				<div class="w3-banner-info">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="w3layouts-banner-info">
									<h4>Bem-Vindo ao HelperTec</h4>
										<h3>Descarte de Lixo Eletônico</h3>
										<div class="banner_form_agileits">
										<h5>Inscreva-se para contribuir</h5>
										
												
											
												<a href="cadastro.html"><input type="button" value="Inscrever-se"></a>
												<div class="clearfix"></div>
											
										</div>

									</div>
								</li>
								<li>
									<div class="w3layouts-banner-info">
									<h4>Bem-Vindo ao HelperTec</h4>
										<h3>Contribua com o meio ambiente</h3>
										<div class="banner_form_agileits">
										<h5>Inscreva-se para contribuir</h5>
										
												
												
												<a href="cadastro.html"><input type="button" value="Inscrever-se"></a>
												<div class="clearfix"></div>
											
										</div>
									</div>
								</li>
								<li>
									<div class="w3layouts-banner-info">
										<h4>Bem-Vindo ao HelperTec</h4>
										<h3>Faça sua parte</h3>
										<div class="banner_form_agileits">
											<h5>Inscreva-se para contribuir</h5>
											
												
												
												<a href="cadastro.html"><input type="button" value="Inscrever-se"></a>
												<div class="clearfix"></div>
											
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
									
									<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">Travel</h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/about2.jpg" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- about -->
	<div class="section w3ls-banner-btm-main">
		<div class="container">
			<div class="banner-btm">
				<div class="col-md-6 banner-btm-g1">
					<img src="fotos/celular lixo.png" alt="" width="550" height="350" />
				</div>
				<div class="col-md-6 banner-btm-g2">
					<h3 class="title-main">Boas Vindas ao HelperTec </h3>
					<h4 class="sub-title">Relate Online o Descarte</h4>
					<p>HelperTec é o "ajudante" do meio ambiente, contribuindo com o descarte correto de resíduos eletrônicos. Além do descarte correto, o site também auxulia seus usuários sobre os impactos que estes materias podem causar no planeta e nos seres vivos. Logo mais abaixo, você verá algumas curiosidades e botões de "Clicando Aqui", que lhes levará para mais detalhes sobre os assuntos ali mencionados.

					</p>
					<div class="find-about">
					
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<h3 class="heading-agileinfo">HelperTec<span>Relate Online o Descarte</span></h3>
	<div class="about-grid">
		
		<div class="col-md-6 about-sub-grid">
			<div class="col-md-6 about-right about-right-flex">
				<div class="about-bottom-text">
					<h4 class="title1">Lixo eletrônico </h4><br><br>
					<p class="text">Lixo eletrônico é todo equipamento ou acessório eletroeletrônico que foram descartados e não serão reutilizados pelas mesmas pessoas.</p>
					
				</div>
				<div class="about-bottom-grid about-img1">
				</div>
			</div>
			<div class="col-md-6 about-right about-right-flex">
				<div class="about-bottom-grid about-img2">
				</div>
				<div class="about-bottom-text ab1">
					<h4 class="title1">Impactos ambientais </h4><br><br>
					<p class="text">O mau descarte de lixo eletrônico gera muitos malefícios para sociedade, tais como: contaminação de solo e lençóis freáticos, além de diminuir a vida de aterros sanitários.
				</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>	
		<div class="col-md-6 about-bottom-grid about-bg"></div>
		<div class="clearfix"></div>
	</div>
	<!-- //about -->
<!-- news -->
	
	<!-- //news -->

	<!-- //services -->
	<!-- testimonials -->
<div class="testimonials">
	<div class="container">
		<h3 class="heading-agileinfo">O Descarte Consciente<span>Veja Alguns Tópicos</span></h3>
		<div class="flexslider-info">
			<section class="slider1">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l-info1">
								<div class="col-md-3 testimonials-grid-1">
									<img src="fotos/lixolixo.jpg" alt="" />
								</div>
								<div class="col-md-9 testimonials-grid-2">
									<h4>Lixo eletrônico</h4>
									<h5>O que é?</h5>
									<p>O Lixo Eletrônico possui muitos nomes, como e-lixo, resíduos de equipamento eletroeletrônico (REEE) ou simplesmente resíduo eletrônico. Os termos se referem a produtos elétricos ou eletrônicos que são descartados por não terem mais utilidade, ou seja, poderiam ser reciclados aos invés de destinados em um aterro sanitário. Você pode saber mais sobre o Lixo eletrônico <a href="https://www.todamateria.com.br/lixo-eletronico/">Clicando Aqui</a>.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l-info1">
								<div class="col-md-3 testimonials-grid-1">
									<img src="fotos/doente.jpg" alt="" />
								</div>
								<div class="col-md-9 testimonials-grid-2">
									<h4>Qual é o impacto do lixo eletrônico no Brasil?</h4>
									<h5>E o que isso afeta em crianças?</h5>
									<p> Além dos impactos no planeta já mencionados logo acima; algumas doenças infantis também podem estar associadas ao lixo eletrônico. Esses aspectos incluem: alterações na função pulmonar, efeitos respiratórios, danos ao DNA, prejuízos à função da tireoide e aumento do risco de algumas doenças crônicas tardias, como câncer e doenças cardiovasculares. Você pode saber mais sobre este impacto que os resíduos eletrônicos possam agregar na saúde infantil <a href="https://www.bio.fiocruz.br/index.php/br/noticias/2453-oms-lixo-eletronico-afeta-saude-de-milhoes-de-criancas">Clicando Aqui</a>.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l-info1">
								<div class="col-md-3 testimonials-grid-1">
									<img src="fotos/PNRS.png" alt=""  />
								</div>
								<div class="col-md-9 testimonials-grid-2">
									<h4>Como proceder caso possua algum resíduo eletrônico?</h4>
									<h5>Qual a melhor maneira de "se livrar" disso?</h5>
									<p>A melhor maneira de descartar estes materiais é levar o lixo eletrônico para pontos de coleta seletiva. Várias cidades no Brasil têm esses pontos de coleta, conhecidos como Ecopontos. Também existem os postos coletores, mercados e revendedores de produtos eletrônicos que aceitam estes materiais. Muitos destes descartes ainda podem ser reaproveitados através de pessoas especializadas no assunto. Quer saber mais sobre este assunto? Então veja sobre a Política Nacional de Resíduos Sólidos (PNRS) <a href="http://www.planalto.gov.br/ccivil_03/_ato2007-2010/2010/lei/l12305.htm">Clicando Aqui</a>.</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</div>
<!-- //testimonials -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-4 agile-footer-grid">
					<h4>Sobre nosso site</h4>
					<p>Esse site foi desenvolvido por alunos da <a href="https://univesp.br">Univesp</a>, com a finalidade de projetar uma aplicação voltada para a matéria de Projeto Integrador II.<span>O mesmo fora desenvolvido sem nenhum fim lucrativo.</span></p>
				</div>
				
				<div class="col-md-2 agile-footer-grid">
					<h4>Linhas do (REEE)</h4>
					<ul>
						<li>Linha Verde</li>
						<li>Linha Marrom</li>
						<li>Linha Azul</li>
						<li>Linha Branca</li>
					</ul>
				</div>
				<div class="col-md-2 agile-footer-grid">
					<h4>Navegação</h4>
					<ul>
						<li class="text"><a class="active" href="indexpessoaladm.php">Página Inicial</a></li>
						<li class="text"><a href="perfilpessoaladm.php">'.$_SESSION["nome"].'</a></li>
						<li class="text"><a href="consultarDenunciaAdm.php">Consultar Denúncias</a></li>
						<li class="text"><a href="logout.php">Sair</a></li>
					</ul>
				</div>';
				?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->

<!-- footer -->
<div class="copy-right">
	<div class="container">
			<p> &copy; 2018 Travel . All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
	</div>
</div>
<!-- //footer -->

	<script src="js/responsiveslides.min.js"></script>
	<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										  // Slideshow 4
										  $("#slider4").responsiveSlides({
											auto: true,
											pager:true,
											nav:false,
											speed: 400,
											namespace: "callbacks",
											before: function () {
											  $('.events').append("<li>before event fired.</li>");
											},
											after: function () {
											  $('.events').append("<li>after event fired.</li>");
											}
										  });
									
										});
									 </script>
	<!-- gallery-pop-up-script -->
<script src="js/jquery.chocolat.js"></script>
<script type="text/javascript">
$(function() {
	$('.view-seventh a').Chocolat();
});
</script>
<!-- //gallery-pop-up-script -->

	
<script defer src="js/jquery.flexslider.js"></script>
<!--Start-slider-script-->
		<script type="text/javascript">
		
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>

	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>