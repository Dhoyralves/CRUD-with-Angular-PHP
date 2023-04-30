<?php
//variaveis de acesso

$url = "localhost";
$usuario = "root";
$senha = "";
$base = "api";

//conexão
$conexao = mysqli_connect($url, $usuario, $senha, $base);

//arrumar caracteres especiais
mysqli_set_charset($conexao, "utf8"); // isso pq o banco de dados as vezes pode não trabalhar com ç ou @

?>