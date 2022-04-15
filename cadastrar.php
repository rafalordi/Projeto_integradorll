<?php



$conexao = @mysql_connect('localhost', 'root', '');
mysql_select_db('helper') or die(mysql_error());






$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql = mysql_query("INSERT INTO pessoa(nome, telefone, email, senha)
VALUES('$nome', '$telefone', '$email', '$senha')");

//$nome = mysql_query("SELECT nome FROM pessoa WHERE email = '$email' and senha = '$senha'") or die(mysql_error());
$sql = mysql_query("SELECT * FROM pessoa WHERE email = '$email' and senha = '$senha'") or die(mysql_error());
$row = mysql_num_rows($sql);
$sql = mysql_query("Select nome From pessoa WHERE email = '$email' and senha = '$senha'");
$exibe = mysql_fetch_assoc($sql);


$id = @mysql_query("SELECT id_pessoa FROM pessoa WHERE email = '$email' and senha = '$senha'") or die(mysql_error());
$meuid = @mysql_fetch_assoc($id);


$telefone = @mysql_query("SELECT telefone FROM pessoa WHERE email = '$email' and senha = '$senha'") or die(mysql_error());
$meutelefone = @mysql_fetch_assoc($telefone);



if($row > 0){
	session_start();
	$_SESSION['email']=$_POST['email'];
	$_SESSION['senha']=$_POST['senha'];
	$_SESSION['nome']=$exibe['nome'];
	$_SESSION['id_pessoa']=$meuid['id_pessoa'];
	$_SESSION['telefone']=$meutelefone['telefone'];


header("Location:perfilpessoal.php");}

	
?>