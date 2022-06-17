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
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro']
$email=$_POST['email'];
$telefone=$_POST['telefone'];


$sql = mysqli_query($conn, "INSERT INTO usuario(nome, rua, numero, bairro, email, telefone) 
VALUES('$nome', '$telefone', '$email', '$assunto', '$descricao')");




header("Location:solicitacaoRecebida.php");

	
?>
