<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$db = "pi";
$id = $_SESSION['id_pessoa'];
@mysqli_connect($host,$username,$password) or die("Impossível conectar ao banco."); 
 
@mysqli_select_db($db) or die("Impossível conectar ao banco"); 
 
$result=@mysqli_query($conn, "SELECT imagem FROM denuncia join pessoa on (id_pessoa = pessoa_id_pessoa) WHERE id_pessoa = $id)" or die('vsf wilson')); 
 
while($row=@mysqli_fetch_object($result)) { 
    echo "<img src='getImagem.php?PicNum=$row->pessoa_id_pessoa' \">"; 
} 
 
?>