
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
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
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
	})
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner-1">
		<div class="w3-header-bottom">
		<div class="container">
			<div class="w3layouts-logo">
				<h1>
					<a href="index.html">Helper </a>
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
									<li class="first-list"><a href="indexpessoal.php">Página Inicial</a></li>
									<li><a class="active" href="perfilpessoal.php">'.$_SESSION["nome"].'</a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle hvr-sweep-to-right" data-hover="Pages" data-toggle="dropdown">Denúncias <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="areadedenuncia.php">Denunciar</a></li>
											<li><a href="consulta.php">Consultar Denúncias</a></li>
										</ul>
									</li>
									<li><a href="logout.php">Sair</a></li>
									

									
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
	</div>
	
	
	
		<div class="contact">
		<div class="container">
			<h2 class="heading-agileinfo">Seja Bem-vindo '.$_SESSION['nome'].'<span>Helper - Denúncia Online</span></h2>
			<div class="w3layouts_mail_grids">
				<div class="col-md-4 w3layouts_mail_grid_left">
					
						<img src="images/quase.jpg" width="300" height="300">
						
				</div>
				<div class="col-md-8 w3layouts_mail_grid_right">
					<form action="alterardados2.php" method="post">
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="nome" placeholder="Apenas primeiro e último nome" required="">
							<input type="email" name="email" placeholder="E-mail" required="">
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="telefone" placeholder="Telefone" required="">
							<input type="password" name="senha" placeholder="Senha" required="">
						</div>
						<div class="clearfix"> </div>
						<br><br><br>
						<center><input type="submit" value="Confirmar Mudanças"></center>	
					</form>
					<center><a href="perfilpessoal.php"><input type="button" value="Voltar"></a><center>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	
	
	
	
	
	
	
	<!-- modal -->
	<!-- <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
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
		</div>*/
	</div> -->
	<!-- //modal -->
	<!-- contact form  -->

<!-- //contact form -->
<!-- map -->	
	<!-- <div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" style="border:0"></iframe>
	 </div> -->
<!-- //map -->	
<!--
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
	</div> -->

<!-- footer -->







	
	
	
	
	
	

	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-4 agile-footer-grid">
					<h4>Sobre nosso site</h4>
					<p>Esse site foi desenvolvido por alunos do curso Técnico de Informática, da ETEC Arnaldo Pereira Cheregatti para apresentar como Trabalho de Conclusão de Curso. <span> O mesmo sendo desenvolvido sem nenhum fim lucrativo.</span></p>
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
				
				
				
				<div class="col-md-2 agile-footer-grid" align="right">
					<h4>Navegação</h4>
					<ul>
					<li class="text"><a href="indexpessoal.php">Página Inicial</a></li>
						<li class="text"><a href="perfilpessoal.php">'.$_SESSION["nome"].'</a></li>
						<li class="text"><a href="areadedenuncia.php">Denuncia</a></li>
						<li class="text"><a href="suportepessoal.php">Suporte</a></li>
						<li class="text"><a href="logout.php">Sair</a></li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->

<!-- footer -->
<div class="copy-right">
	<div class="container">
			<p> &copy; 2018 Helper . Todos direitos reservados | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
	</div>
</div>
<!-- //footer -->
<!--Start-slider-script-->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: "toTop", // fading element id
				containerHoverID: "toTopHover", // fading element hover id
				scrollSpeed: 1200,
				easingType: "linear"
				};
			*/
								
			$().UItoTop({ easingType: "easeOutQuart" });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>';
?>


