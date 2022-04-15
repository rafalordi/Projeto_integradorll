<?php
 
 session_start();
 
 
$imagem = $_FILES["imagem"];
$host = "localhost";
$username = "root";
$password = "";
$db = "helper";
$descricao = $_POST["descricao"];
//$inteiro = (string) $_SESSION['id_pessoa'];
$id = $_SESSION['id_pessoa'];
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$telefone = $_SESSION['telefone'];



$con=mysqli_connect($host,$username,$password,$db);

   
if($imagem != NULL) { 
    $nomeFinal = time().'.jpg';
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
        $tamanhoImg = filesize($nomeFinal); 
 
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 
 
      
		
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
 
		if (!mysqli_query($con,"INSERT INTO denuncia (imagem, descricao, pessoa_id_pessoa, nome, email, telefone) VALUES ('$mysqlImg', '$descricao', $id, '$nome', '$email', '$telefone')"))
		{
			echo("Error description: " . mysqli_error($con));
		}

	
	}
}



header("Location:denunciaRecebida.php");

	
?>