<?php
require_once('/xampp/htdocs/php/controller/conexao.php');
function criarAluno()
{
    if (isset($_POST['cpf'])) {
        global $login;
        $aluno = new Aluno(
            addslashes($_POST['cpf']),
            addslashes($_POST['email']),
            addslashes($_POST['rg']),
            addslashes($_POST['endereco']),
            addslashes($_POST['curso']),
            addslashes($_POST['instituicao']),
            $login
        );
        return $aluno;
    }
}

function insertAluno($aluno)
{
    global $conexao;
    $query = "INSERT INTO aluno (CPF ,EMAIL, RG, ENDERECO, CURSO, ID_INSTITUICAO, LOGIN_USUARIO) VALUES
     ('{$aluno->getCpf()}','{$aluno->getEmail()}','{$aluno->getRg()}',
     '{$aluno->getEndereco()}','{$aluno->getCurso()}','{$aluno->getInstituicao()}', '{$aluno->getLogin()}')";
    $conexao->exec($query);
}
function consultaAluno()
{
    global $conexao;
    $consulta = "SELECT * FROM aluno";
    $result = $conexao->query($consulta) or die($conexao->error);
    $alunos = $result->fetchAll();
    return $alunos;
}
