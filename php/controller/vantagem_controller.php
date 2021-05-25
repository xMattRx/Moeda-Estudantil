<?php

function criarVantagem($foto)
{
    if (isset($_POST['nome'])) {
        global $conexao;
        $cnpj = 0;
        $consulta = "SELECT CNPJ FROM empresa WHERE LOGIN_USUARIO = {$_POST['cnpj']}";
        $result = $conexao->query($consulta) or die($conexao->error);
        $vantagens = $result->fetchAll();
        $cnpj = $vantagens[0]['CNPJ'];

        $vantagem = new Vantagem(addslashes($_POST['moedas']), addslashes($foto), addslashes($_POST['nome']), addslashes($_POST['descricao']), $cnpj);
        return $vantagem;
    }
}
function insertVantagem($vantagem)
{
    global $conexao;
    $query = "INSERT INTO vantagem (CUSTO_MOEDAS,FOTO, NOME, DESCRICAO, CNPJ_EMPRESA) VALUES ('{$vantagem->getMoedas()}', '{$vantagem->getFoto()}','{$vantagem->getNome()}','{$vantagem->getDescricao()}','{$vantagem->getCnpj()}')";
    $conexao->exec($query);
}
function consultaVantagem()
{
    global $conexao;
    $consulta = "SELECT * FROM vantagem";
    $result = $conexao->query($consulta) or die($conexao->error);
    $vantagens = $result->fetchAll();
    return $vantagens;
}
