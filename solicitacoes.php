<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$banco = "PI";
$conn = @mysqli_connect($host,$user,$pass,$banco) or die(mysqli_error());
?>
<?php
$nome=$_POST['nome'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];
$email=$_POST['email'];
$telefone=$_POST['telefone'];


$sql = mysqli_query($conn, "INSERT INTO usuario(nome, rua, numero, bairro, email, telefone) 
VALUES('$nome', '$rua', '$numero', '$bairro', '$email', '$telefone')");


header("Location:suporteenviado.html");
?>