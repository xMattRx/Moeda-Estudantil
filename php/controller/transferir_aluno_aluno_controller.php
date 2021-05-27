<?php
session_start();
require_once("/xampp/htdocs/php/controller/aluno_controller.php");

$transferidas = $_POST['moedas'];
$alunos = consultaAluno();
$moedas_aluno;
for ($i = 0; $i < count($alunos); $i++) {
    if ($alunos[$i]["LOGIN_USUARIO"] == $_SESSION['login']) {
        $moedas_aluno = $alunos[$i]["MOEDAS"];
    }
}
transferencia();


function transferencia()
{
    global $conexao;
    global $transferidas;
    global $moedas_aluno;
    if ($transferidas <= $moedas_aluno) {
        $total_aluno = $moedas_aluno - $transferidas;
        $query = "UPDATE `aluno` SET `MOEDAS` = '{$total_aluno}' WHERE `aluno`.`LOGIN_USUARIO` = '{$_SESSION['login']}'";
        $conexao->exec($query);
        $login = $_POST['login'];


        $consulta = "SELECT MOEDAS FROM aluno WHERE `aluno`.`LOGIN_USUARIO` = '{$login}' ";
        $result = $conexao->query($consulta) or die($conexao->error);
        $alunos2 = $result->fetchAll();
        if ($alunos2[0]['MOEDAS'] == null) {
            $query = "UPDATE `aluno` SET `MOEDAS` = '{$transferidas}' WHERE `aluno`.`LOGIN_USUARIO` = '{$login}'";
            $conexao->exec($query);
        } else {
            $total = $transferidas + $alunos2[0]['MOEDAS'];
            $query = "UPDATE `aluno` SET `MOEDAS` = '{$total}' WHERE `aluno`.`LOGIN_USUARIO` = '{$login}'";
            $conexao->exec($query);
        }
        header("Refresh:0; url=../view/perfil_aluno_view.php");
    }
}
