<?php 

//incluir a conexão
include("conexao.php");

//obter dados via json
$obterDados = file_get_contents("php://input"); 

//extrair os dados do JSON
$extrair = json_decode($obterDados);

//separar os dados do JSON 
$idCursos = $extrair->cursos01->idCursos;
$nomeCurso = $extrair->cursos01->nomeCurso;
$valorCurso = $extrair->cursos01->valorCurso; 

//sql
$sql = " UPDATE cursos SET nomeCurso='$nomeCurso', valorCurso=$valorCurso WHERE idCursos=$idCursos";
mysqli_query($conexao, $sql); 

//exportar os dados cadstrados
$curso = [
    'idCursos' => $idCursos,
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
]

json_encode(['curso1']=>$curso);




?>