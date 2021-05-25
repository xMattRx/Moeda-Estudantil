<?php
include_once("/xampp/htdocs/php/controller/conexao.php");
include_once("/xampp/htdocs/php/controller/vantagem_controller.php");

global $conexao;
$linha_editar = $_POST["edicao"];
$custo_moedas = $_POST['custo_moedas'];
$foto = $_POST['foto'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];



$consulta = "SELECT * FROM vantagem";
$result = $conexao->query($consulta) or die($conexao->error);
$vantagem = $result->fetchAll();
$vantagem_editada_MOEDAS = $vantagem[$linha_editar]['CUSTO_MOEDAS'];
$vantagem_editada_FOTO = $vantagem[$linha_editar]['FOTO'];
$vantagem_editada_NOME = $vantagem[$linha_editar]['NOME'];
$vantagem_editada_DESCRICAO = $vantagem[$linha_editar]['DESCRICAO'];



$query = "UPDATE `vantagem` SET `CUSTO_MOEDAS` = '{$custo_moedas}', `FOTO` = '{$foto}', `NOME` = '{$nome}', `DESCRICAO` = '{$descricao}' WHERE `empresa`.`CNPJ` = '{$empresa_editada_CNPJ}'";
$conexao->exec($query);

header("Refresh:0; url=../view/listagem_vantagem_view.php");
