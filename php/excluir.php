<?php 

//incluir a conexão
include("conexao.php");

//obter dados via json
$obterDados = file_get_contents("php://input"); 

//extrair os dados do JSON
$extrair = json_decode($obterDados);

//separar os dados do JSON 
$idCursos = $extrair->cursos01->idCursos;

//sql
$sql = "DELETE FROM cursos WHERE idCursos=$idCursos";
mysqli_query($conexao, $sql); 


?>