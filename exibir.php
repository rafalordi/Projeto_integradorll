<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "helper";
$id = $_SESSION['id_pessoa'];
@mysql_connect($host,$username,$password) or die("Impossível conectar ao banco."); 
 
@mysql_select_db($db) or die("Impossível conectar ao banco"); 
 
$result=@mysql_query("SELECT imagem FROM denuncia join pessoa on (id_pessoa = pessoa_id_pessoa) WHERE id_pessoa = $id)" or die('vsf wilson')); 
 
while($row=@mysql_fetch_object($result)) { 
    echo "<img src='getImagem.php?PicNum=$row->pessoa_id_pessoa' \">"; 
} 
 
?>