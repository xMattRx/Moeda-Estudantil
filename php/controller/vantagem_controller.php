<?php
require_once('/xampp/htdocs/php/controller/conexao.php');
function criarVantagem($cadastrar)
{

    if (isset($cadastrar)) {
        echo "entrou";
        $vantagem = new Vantagem(
            addslashes($_POST['custo_moeda']),
            addslashes($_POST['nome']),
            addslashes($_POST['descricao']),
            addslashes($_POST['cnpj'])
        );

        return $vantagem;
    }
}

function insertVantagem($vantagem)
{
    global $conexao;
    $query = "INSERT INTO vantagem (CUSTO_MOEDAS, NOME, DESCRICAO, CNPJ_EMPRESA)  VALUES
     ('{$vantagem->getCusto_Moedas()}','{$vantagem->getNome()}','{$vantagem->getDescricao()}','{$vantagem->getCNPj_Empresa()}')";
    $conexao->exec($query);
}
function consultaVantagem()
{
    global $conexao;
    $consulta = "SELECT * FROM vantagem ";
    $result = $conexao->query($consulta) or die($conexao->error);
    $vantagem = $result->fetchAll();
    return $vantagem;
}
