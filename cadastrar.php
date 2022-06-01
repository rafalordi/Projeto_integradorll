<?php
$servername = "127.0.0.1";
$database = "PI";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";




$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql = mysqli_query($conn, "INSERT INTO pessoa(nome, telefone, email, senha)
VALUES('$nome', '$telefone', '$email', '$senha')");

$sql = mysqli_query($conn, "SELECT * FROM pessoa WHERE email = '$email' and senha = '$senha'") or die(mysql_error());
$row = mysqli_num_rows($sql);
$sql = mysqli_query("Select nome From pessoa WHERE email = '$email' and senha = '$senha'");
$exibe = mysqli_fetch_assoc($sql);


$id = @mysqli_query($conn, "SELECT id_pessoa FROM pessoa WHERE email = '$email' and senha = '$senha'") or die(mysql_error());
$meuid = @mysqli_fetch_assoc($id);


$telefone = @mysqli_query($conn, "SELECT telefone FROM pessoa WHERE email = '$email' and senha = '$senha'") or die(mysql_error());
$meutelefone = @mysqli_fetch_assoc($telefone);



if($row > 0){
	session_start();
	$_SESSION['email']=$_POST['email'];
	$_SESSION['senha']=$_POST['senha'];
	$_SESSION['nome']=$exibe['nome'];
	$_SESSION['id_pessoa']=$meuid['id_pessoa'];
	$_SESSION['telefone']=$meutelefone['telefone'];


header("Location:perfilpessoal.php");}
?>