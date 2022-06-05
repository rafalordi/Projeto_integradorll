<?php
session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "pi";
$id = $_SESSION['id_pessoa'];
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$telefone = $_SESSION['telefone'];
$senha = $_SESSION['senha'];
$novonome = $_POST['nome'];
$novoemail = $_POST['email'];
$novotelefone = $_POST['telefone'];
$novasenha = $_POST['senha'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE pessoa SET nome='$novonome',email='$novoemail',telefone='$novotelefone',senha='$novasenha' WHERE id_pessoa=$id";

if ($conn->query($sql) === TRUE) {

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$banco = 'pi';
	
	
$conexao = @mysqli_connect($host,$user,$pass) or die(mysqli_error());
@mysqli_select_db($banco) or die(mysqli_error());	
	
	
$senhaa = @mysqli_query("SELECT senha FROM pessoa WHERE id_pessoa=$id") or die(mysqli_error());
$minhasenha = @mysqli_fetch_assoc($senhaa);	
	
$nomee = @mysqli_query("SELECT nome FROM pessoa WHERE id_pessoa=$id") or die(mysqli_error());
$meunome = @mysqli_fetch_assoc($nomee);
	
$emaill = @mysqli_query("SELECT email FROM pessoa WHERE id_pessoa=$id") or die(mysqli_error());
$meuemail = @mysqli_fetch_assoc($emaill);	
	
$idd = @mysqli_query("SELECT id_pessoa FROM pessoa WHERE id_pessoa=$id") or die(mysqli_error());
$meuid = @mysqli_fetch_assoc($idd);

$telefonee = @mysqli_query("SELECT telefone FROM pessoa WHERE id_pessoa=$id") or die(mysqli_error());
$meutelefone = @mysqli_fetch_assoc($telefonee);
	
	session_destroy();
	session_start();
	$_SESSION['email']=$meuemail['email'];
	$_SESSION['senha']=$minhasenha['senha'];
	$_SESSION['nome']=$meunome['nome'];
	$_SESSION['id_pessoa']=$meuid['id_pessoa'];
	$_SESSION['telefone']=$meutelefone['telefone'];
    header("Location:dadosalterados.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();


?>