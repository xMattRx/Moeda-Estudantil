<?php
session_start();
require_once("/xampp/htdocs/php/controller/professor_controller.php");

$transferidas = $_POST['moedas'];
$professores = consultaProfessor();
$moedas_professor;
for ($i = 0; $i < count($professores); $i++) {
    if ($professores[$i]["LOGIN_USUARIO"] == $_SESSION['login']) {
        $moedas_professor = $professores[$i]["MOEDAS"];
    }
}
transferencia();


function transferencia()
{
    global $conexao;
    global $transferidas;
    global $moedas_professor;
    if ($transferidas <= $moedas_professor) {
        $total_professor = $moedas_professor - $transferidas;
        $query = "UPDATE `professor` SET `MOEDAS` = '{$total_professor}' WHERE `professor`.`LOGIN_USUARIO` = '{$_SESSION['login']}'";
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
        header("Refresh:0; url=../view/perfil_professor_view.php");
    }
}
