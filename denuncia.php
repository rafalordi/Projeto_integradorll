<html xmlns="http://www.w3.org/1999/xhtml">
<?php

session_start();
echo '<head>

<link rel="shortcut icon" href="icon.jpg" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Helper</title>
<link rel="shortcut icon" href="images\hicon.png" >
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="logo" class="container">
	<h1><a href="indexpessoal.php">Helper</span></a></h1> 
</div>
<div id="menu" class="container">
	<ul>
			<li><a href="#" accesskey="1" title=""><a HREF="indexpessoal.php#">Página Inicial</a></li>
		<li><a href="#" accesskey="2" title=""><a HREF="perfil.php#">'.$_SESSION["nome"].'</a></li>
		<li  class="current_page_item"><a href="#" accesskey="3" title=""><a HREF="denuncia.php#">Área de Denúncias</a></li>
		<li><a href="#" accesskey="4" title=""><a HREF="suportepessoal.php#">Suporte</a></li>
		<li><a href="#" accesskey="5" title=""><a HREF="sair.php#">Sair</a></li>
	</ul>
</div>
<br><br><br><br>


				<center>
					<form enctype="multipart/form-data" action="recebeDenuncia.php" method="post" class="">
			 <div class="form-group">

				<div class="form-group col-md-6">
					<label for="inputPassword4">Descrição:</label><br>
					<input type="textarea" width="100%%" id="inputPassword4" name="descricao" placeholder="Descricao">
				</div>
			</div>
			<div class="form-group">
				<label for="inputAddress">Imagem do Ocorrido(Print):</label><br>
				<input type="file" width="50%" id="inputAddress" name="arquivo" placeholder="Arquivo">
			</div>
	
	
		
			
			
			
	<br />
	
			<button type="submit" class="btn btn-primary">Cadastrar</button>		
		</form>

		<form method="post" enctype="multipart/form-data" action="recebeDenuncia.php">

</center>



			
			<br>
			<br>
			</body>
</html>';



			/* <div class="form-group">
				<div class="form-group col-md-6">
					<label for="inputEmail4">Gênero da denuncia:</label>
					  <select name="cars">
    <option value="racismo">Racismo</option>
    <option value="homofobia">Homofobia</option>
    <option value="sexismo">Sexismo</option>
    <option value="pedofilia">Pedofilia</option>
	<option value="outro">Outro</option>
  </select>
					<br><br>
				</div>
				<div class="form-group col-md-6">
					<label for="inputPassword4">Outro:</label><br><br>
					<textarea name="outro"></textarea>
				</div>
				<br><br>*/
?>