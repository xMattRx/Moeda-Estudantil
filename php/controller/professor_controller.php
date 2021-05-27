<?php
require_once("/xampp/htdocs/php/controller/conexao.php");
function consultaProfessor()
{
    global $conexao;
    $consulta = "SELECT * FROM professor;";
    $result = $conexao->query($consulta) or die($conexao->error);
    $professores = $result->fetchAll();
    return $professores;
}
function moedas()
{
    $professores = consultaProfessor();

    for ($i = 0; $i < count($professores); $i++) {
        if ($professores[$i]["LOGIN_USUARIO"] == $_SESSION['login']) {
            echo "Moedas disponiveis: " . $professores[$i]["MOEDAS"];
        }
    }
}
function mostrar_alunos()
{
    global $conexao;
    $consulta = "SELECT ID_INSTITUICAO FROM professor WHERE LOGIN_USUARIO = '{$_SESSION['login']}'";
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

            if ($alunos[$i]['LOGIN_USUARIO'] == $alunos2[$j]['LOGIN']) {

                echo "<option value='{$alunos2[$j]['LOGIN']}'>{$alunos2[$j]['NOME']}</option>";
            }
        }
    }
}
