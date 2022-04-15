<?php



$conexao = @mysql_connect('localhost', 'root', '');
mysql_select_db('helper') or die(mysql_error());






$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$descricao=$_POST['descricao'];


$sql = mysql_query("INSERT INTO suporte(nome, telefone, email, assunto, descricao)
VALUES('$nome', '$telefone', '$email', '$assunto', '$descricao')");




header("Location:suporteenviado.html");

	
?>