<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$banco = "PI";
$conexao = @mysqli_connect($host,$user,$pass,$banco) or die(mysqli_error());
//mysqli_select_db($banco) or die(mysqli_error());
?>
<?php

$email=$_POST['email'];
$senha=$_POST['senha'];

//$nome = mysql_query("SELECT nome FROM pessoa WHERE email = '$email' and senha = '$senha'") or die(mysql_error());
$sql = mysqli_query($conexao, "SELECT * FROM adm WHERE email = '$email' and senha = '$senha'") or die(mysqli_error());
$row = mysqli_num_rows($sql);
$sql = mysqli_query($conexao, "SELECT nome From adm WHERE email = '$email' and senha = '$senha'");
$exibe = mysqli_fetch_assoc($sql);

$id = @mysqli_query($conexao, "SELECT id_adm FROM adm WHERE email = '$email' and senha = '$senha'") or die(mysqli_error());
$meuid = @mysqli_fetch_assoc($id);


$telefone = @mysqli_query($conexao, "SELECT telefone FROM adm WHERE email = '$email' and senha = '$senha'") or die(mysqli_error());
$meutelefone = @mysqli_fetch_assoc($telefone);


if($row > 0){
	session_start();
	$_SESSION['email']=$_POST['email'];
	$_SESSION['senha']=$_POST['senha'];
	$_SESSION['nome']=$exibe['nome'];
	$_SESSION['telefone']=$meutelefone['telefone'];
	$SESSION['id_adm']=$meuid['id_adm'];


	
header("Location:perfilpessoaladm.php");}

else{
	
	header("Location:perfiladmfalso.html");
	
}



?>