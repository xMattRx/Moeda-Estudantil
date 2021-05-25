<?php
include_once("/xampp/htdocs/php/controller/conexao.php");
include_once("/xampp/htdocs/php/controller/empresa_controller.php");

global $conexao;
$linha_editar = $_POST["edicao"];
$cnpj = $_POST['cnpj'];
$nome = $_POST['nome'];


$consulta = "SELECT * FROM empresa";
$result = $conexao->query($consulta) or die($conexao->error);
$empresas = $result->fetchAll();
$empresa_editada_CNPJ = $empresas[$linha_editar]['CNPJ'];
$empresa_editada_LOGIN = $empresas[$linha_editar]['LOGIN_USUARIO'];


$query = "UPDATE `empresa` SET `CNPJ` = '{$cnpj}', `NOME` = '{$nome}' WHERE `empresa`.`CNPJ` = '{$empresa_editada_CNPJ}'";
$conexao->exec($query);
$query = "UPDATE `usuario` SET `NOME` = '{$nome}' WHERE `usuario`.`LOGIN` = '{$empresa_editada_LOGIN}'";
$conexao->exec($query);
header("Refresh:0; url=../view/listagem_empresas_view.php");
