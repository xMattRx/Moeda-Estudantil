<?php
session_start();
require_once("/xampp/htdocs/php/controller/aluno_controller.php");

$moedas_aluno;
trocar();
function trocar()
{

    $gastas = $_POST['moedas'];
    $alunos = consultaAluno();
    global $moedas_aluno;
    for ($i = 0; $i < count($alunos); $i++) {
        if ($alunos[$i]["LOGIN_USUARIO"] == $_SESSION['login']) {
            $moedas_aluno = $alunos[$i]["MOEDAS"];
        }
    }


    global $conexao;
    if ($moedas_aluno >= $gastas) {

        $total_aluno = $moedas_aluno - $gastas;
        $query = "UPDATE `aluno` SET `MOEDAS` = '{$total_aluno}' WHERE `aluno`.`LOGIN_USUARIO` = '{$_SESSION['login']}'";
        $conexao->exec($query);
    }




    //$query = "UPDATE `empresa` SET `CNPJ` = '{$cnpj}', `NOME` = '{$nome}' WHERE `empresa`.`CNPJ` = '{$empresa_editada_CNPJ}'";
    //$conexao->exec($query);
    //$query = "UPDATE `usuario` SET `NOME` = '{$nome}', `SENHA` = '{$senha}' WHERE `usuario`.`LOGIN` = '{$empresa_editada_LOGIN}'";
    //$conexao->exec($query);


    header("Refresh:0; url=../view/trocar_por_vantagens_view.php");
}
