<?php
require_once('/xampp/htdocs/php/controller/conexao.php');
function criarEmpresa()
{
    if (isset($_POST['cnpj'])) {
        global $login;
        $empresa = new Empresa(
            addslashes($_POST['cnpj']),
            addslashes($_POST['nome']),
            $login
        );
        return $empresa;
    }
}

function insertEmpresa($empresa)
{
    global $conexao;
    $query = "INSERT INTO empresa (CNPJ,NOME,LOGIN_USUARIO) VALUES
     ('{$empresa->getCnpj()}','{$empresa->getNome()}','{$empresa->getLogin()}')";
    $conexao->exec($query);
}
function consultaEmpresa()
{
    global $conexao;
    $consulta = "SELECT * FROM empresa";
    $result = $conexao->query($consulta) or die($conexao->error);
    $empresas = $result->fetchAll();
    return $empresas;
}
