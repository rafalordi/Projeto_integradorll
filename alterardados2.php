<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helper";
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

$host = 'localhost';
$user = 'root';
$pass = '';
$banco = 'helper';
	
	
$conexao = @mysql_connect($host,$user,$pass) or die(mysql_error());
@mysql_select_db($banco) or die(mysql_error());	
	
	
$senhaa = @mysql_query("SELECT senha FROM pessoa WHERE id_pessoa=$id") or die(mysql_error());
$minhasenha = @mysql_fetch_assoc($senhaa);	
	
$nomee = @mysql_query("SELECT nome FROM pessoa WHERE id_pessoa=$id") or die(mysql_error());
$meunome = @mysql_fetch_assoc($nomee);
	
$emaill = @mysql_query("SELECT email FROM pessoa WHERE id_pessoa=$id") or die(mysql_error());
$meuemail = @mysql_fetch_assoc($emaill);	
	
$idd = @mysql_query("SELECT id_pessoa FROM pessoa WHERE id_pessoa=$id") or die(mysql_error());
$meuid = @mysql_fetch_assoc($idd);

$telefonee = @mysql_query("SELECT telefone FROM pessoa WHERE id_pessoa=$id") or die(mysql_error());
$meutelefone = @mysql_fetch_assoc($telefonee);
	
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