<?php
session_start();

$id = $_SESSION['id_pessoa'];


   $nome_imagem = $_GET['pessoa_id_pessoa'];
$conexao = mysqli_connect($conexao,'127.0.0.1', 'root', '', 'pi');
$consulta = mysqli_query($conexao, "select imagem from denuncia where ".$nome_imagem." = ".$id);
//como o nome da imagem deve ser unico, apenas um registro deveria ser 
//retornado
$resultado = mysqli_fetch_assoc($consulta);

//como o campo local_imagem é o caminho absoluto ou relativo para 
//a imagem fica facil acessa-la agora.
$caminho_imagem = $resultado['local_imagem'];
//suponto que você salva todas as imagens no mesmo diretorio do script
//A varaivel $resultado['local_imagem'] poderia representar 
//apenas o nome da imagem, e você poderia concatenar os dois

 $mime = mime_content_type(__DIR__ . '/' . $caminho_imagem);
 $tamanho = filesize(__DIR__ . '/' . $caminho_imagem);

 header("Content-Type: ". $mime);
 header("Content-Length: " . $tamanho);

 //e por fim você manda para o navegador
 echo file_get_contents(__DIR__ . '/' . $caminho_imagem);
?>