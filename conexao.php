<?php

$host = '127.0.0.1'; 
$porta = '3307'; 
$usuario = 'root'; 
$senha = ''; 
$banco = 'meu_site';

$mysqli = new mysqli($host, $usuario, $senha, $banco, $porta);


if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}
echo "Conexão bem-sucedida!";
?>
