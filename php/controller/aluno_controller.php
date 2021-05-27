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
function moedas()
{
    $alunos = consultaAluno();

    for ($i = 0; $i < count($alunos); $i++) {
        if ($alunos[$i]["LOGIN_USUARIO"] == $_SESSION['login']) {
            if ($alunos[$i]["MOEDAS"] == null) {
                echo "Moedas disponiveis: " . 0;
            } else {
                echo "Moedas disponiveis: " . $alunos[$i]["MOEDAS"];
            }
        }
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
function mostrar_alunos()
{
    global $conexao;
    $consulta = "SELECT ID_INSTITUICAO FROM aluno WHERE LOGIN_USUARIO = '{$_SESSION['login']}'";
    $result = $conexao->query($consulta) or die($conexao->error);
    $alunos = $result->fetchAll();


    echo "<br>";
    $consulta = "SELECT LOGIN_USUARIO FROM aluno WHERE ID_INSTITUICAO = '{$alunos[0]["ID_INSTITUICAO"]}'";
    $result = $conexao->query($consulta) or die($conexao->error);
    $alunos = $result->fetchAll();

    $consulta = "SELECT * FROM usuario";
    $result = $conexao->query($consulta) or die($conexao->error);
    $alunos2 = $result->fetchAll();



    for ($i = 0; $i < count($alunos); $i++) {

        for ($j = 0; $j < count($alunos2); $j++) {

            if ($alunos[$i]['LOGIN_USUARIO'] == $alunos2[$j]['LOGIN'] && $alunos2[$j]['LOGIN'] != $_SESSION['login']) {

                echo "<option value='{$alunos2[$j]['LOGIN']}'>{$alunos2[$j]['NOME']}</option>";
            }
        }
    }
}
