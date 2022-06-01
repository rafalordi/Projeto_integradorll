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
$assunto=$_POST['assunto'];
$descricao=$_POST['descricao'];


$sql = mysqli_query($conn, "INSERT INTO suporte(nome, telefone, email, assunto, descricao)
VALUES('$nome', '$telefone', '$email', '$assunto', '$descricao')");




header("Location:suporteenviado.html");

	
?>