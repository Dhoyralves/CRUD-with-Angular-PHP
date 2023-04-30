<?php

//Incuir a conexão
include("conexao.php");

//Sql
$sql = "SELECT * FROM cursos";

//Executar
$executar = mysqli_query($conexao, $sql); // aqui ele ta executando um select no banco, e eu vou obter acesso a essas infromações atraves da variavel executar

//vetor
$cursos = []; // aqui ele vai armazenar o id, o nome e o valor dos cursos

//indice
$indice = 0; // esse indice é para mim saber em qual posição do json estou adcionando os meus conteudos

//laço
while($linha = mysqli_fetch_assoc($executar)){ //ele vai fazer linha a linha a selação
    $cursos[$indice]['idCursos'] = $linha['idCursos'];
    $cursos[$indice]['nomeCurso'] = $linha['nomeCurso'];
    $cursos[$indice]['valorCurso'] = $linha['valorCurso'];

    $indice++;
}


//jSON
json_encode(['cursos01'=>$cursos]); //ele ta colocando tudo num arquivo só
//ele ta transformando um vetor de cursos em json

//test
//var_dump($cursos); //verifique a porta do apache, localhost:80/api

?>