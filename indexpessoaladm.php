
<?php

session_start();



echo '<html lang="en">
<head>
<link rel="icon" 
      type="image/png" 
      href="images/hicon.png">
<title>Helper</title>
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
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$("html,body").animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner">
	<div class="agile_dot_info">
		<div class="w3-header-bottom">
		<div class="container">
			<div class="w3layouts-logo">
				<h1>
					<a href="indexpessoaladm.php">Helper </a>
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
					<li><a href="https://www.facebook.com/Helper-Denúncia-Online-2070322706623352/"><i class="fa fa-facebook"></i></a></li>
				
				</ul>
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
									<h4>Bem-Vindo ao Helper</h4>
										<h3>Denúncia Online</h3>
										<div class="banner_form_agileits">
										<h5>Inscreva-se para denunciar</h5>
										
												
											
												<a href="cadastro.html"><input type="button" value="Inscrever-se"></a>
												<div class="clearfix"></div>
											
										</div>

									</div>
								</li>
								<li>
									<div class="w3layouts-banner-info">
									<h4>Bem-Vindo ao Helper</h4>
										<h3>Acabe com o preconceito virtual </h3>
										<div class="banner_form_agileits">
										<h5>Inscreva-se para denunciar</h5>
										
												
												
												<a href="cadastro.html"><input type="button" value="Inscrever-se"></a>
												<div class="clearfix"></div>
											
										</div>
									</div>
								</li>
								<li>
									<div class="w3layouts-banner-info">
										<h4>Bem-Vindo ao Helper</h4>
										<h3>Faça sua parte</h3>
										<div class="banner_form_agileits">
											<h5>Inscreva-se para denunciar</h5>
											
												
												
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
					<img src="images/gutinho.png" class="img-responsive" alt="" />
				</div>
				<div class="col-md-6 banner-btm-g2">
					<h3 class="title-main">Boas Vindas ao Helper </h3>
					<h4 class="sub-title">Denúncia Online</h4>
					<p>Helper é o "ajudante" dos usuários da internet, você pode por meio dele, denunciar crimes virtuais.

					</p>
					<div class="find-about">
						<a href="cadastro.html">Cadastre-se para denunciar</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<h3 class="heading-agileinfo">Helper<span>Denúncia Online</span></h3>
	<div class="about-grid">
		
		<div class="col-md-6 about-sub-grid">
			<div class="col-md-6 about-right about-right-flex">
				<div class="about-bottom-text">
					<h4 class="title1">Racismo </h4>
					<p class="text">Racismo é um resultado do preconceito, causado pelo antipatia e pelo ódio à pessoas com diferente cor de pele, costumes, tradições, idioma, local de nascimento, etc.</p>
				</div>
				<div class="about-bottom-grid about-img1">
				</div>
			</div>
			<div class="col-md-6 about-right about-right-flex">
				<div class="about-bottom-grid about-img2">
				</div>
				<div class="about-bottom-text ab1">
					<h4 class="title1">Homofobia </h4>
					<br><br><br><br>
					<p class="text">Rejeição ou aversão a homossexual e à homossexualidade.
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
		<h3 class="heading-agileinfo">Crimes Virtuais<span>Alguns exemplos</span></h3>
		<div class="flexslider-info">
			<section class="slider1">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l-info1">
								<div class="col-md-3 testimonials-grid-1">
									<img src="images/icone racismo.png" alt="" />
								</div>
								<div class="col-md-9 testimonials-grid-2">
									<h4>Racismo</h4>
									<h5>O que é?</h5>
									<p>É um resultado do preconceito, causado pelo antipatia e pelo ódio à pessoas com diferente cor de pele, costumes, tradições, idioma, local de nascimento, etc.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l-info1">
								<div class="col-md-3 testimonials-grid-1">
									<img src="images/sexismo.png" alt="" />
								</div>
								<div class="col-md-9 testimonials-grid-2">
									<h4>Sexismo</h4>
									<h5>O que é?</h5>
									<p>Sexismo é a discriminação que é exercida sobre um indivíduo pelo seu sexo. Isto significa que a pessoa é discriminada num determinado âmbito, uma vez que se considera que o seu género (sexo), tendo em conta as características, é inferior ao outro.</p>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l-info1">
								<div class="col-md-3 testimonials-grid-1">
									<img src="images/lgbt.png" alt=""  />
								</div>
								<div class="col-md-9 testimonials-grid-2">
									<h4>Homofobia</h4>
									<h5>O que é?</h5>
									<p>A homofobia pode ser definida como “uma aversão irreprimível, repugnância, medo, ódio, preconceito que algumas pessoas nutrem contra os homossexuais, lésbicas, bissexuais e transexuais (também conhecidos como grupos LGBT)”.</p>
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
					<p>Esse site foi desenvolvido por alunos do curso Técnico de Informática, da ETEC Arnaldo Pereira Cheregatti para apresentar como Trabalho de Conclusão de Curso.<span>O mesmo sendo desenvolvido sem nenhum fim lucrativo.</span></p>
				</div>
				
				<div class="col-md-2 agile-footer-grid">
					<h4>Crimes Virtuais</h4>
					<ul>
						<li>Discriminação/Racismo</li>
						<li>Sexismo</li>
						<li>Bullying Virtual</li>
						<li>Homofobia</li>
						<li>Pornografia Infantil</li>
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