<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "PI";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if(mysqli->connect_errno)
	echo "Falha na conex�o: (".$mysqli->connect_errno.") ".$mysqli->error;


?>