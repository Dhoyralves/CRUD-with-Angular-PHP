<?php //cadastramento com php// aqui é como se fosse o backend da aplicação

//incluir a conexão
include("conexao.php");

//obter dados via json, pq no angular vou enviar o cadastramento via json
$obterDados = file_get_contents("php://input"); //esse obter dados é uma variavel, assim como as demais... o file_get_content sgnifica como vou pegar os dados... e eu vou manipular esses dados atraves de (php://input)

//extrair os dados do JSON
$extrair = json_decode($obterDados);

//sql
$sql = "INSERT INTO cursos (nomeCurso, valorCurso) VALUES ('$nomeCurso', $valorCurso)";// o nomeCurso está entre'' pq no banco ele recebe uma string para n ter erros
mysqli_query($conexao, $sql); // aqui é para cadastrar usado o php, sql

//separar os dados do JSON // aqui eu separo o nome do curso e o valor do curso
$nomeCurso = $extrair->cursos01->nomeCurso; //o primeiro é a variavel
$valorCurso = $extrair->cursos01->valorCurso; //o $extrair dá acesso a abrir o json decode, o cursos01 vem lá do arquivo listar do json_encode... e o nomeCurso é uma caracteristica do json no arquivo listar/while depois do $indice

//exportar os dados cadstrados
$curso = [
    'nomeCurso' => $nomeCurso,
    'valorCurso' => $valorCurso
]

json_encode(['curso1']=>$curso);




?>