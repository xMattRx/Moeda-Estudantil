<?php
include_once("/xampp/htdocs/php/controller/conexao.php");
include("/xampp/htdocs/php/controller/empresa_controller.php");
global $conexao;
$linha = $_POST['deletar'];
$empresas = consultaEmpresa();
$cnpj = $empresas[$linha]["CNPJ"];
$login = $empresas[$linha]["LOGIN_USUARIO"];
$query = "DELETE FROM EMPRESA WHERE CNPJ = '{$cnpj}';";
$conexao->exec($query);
$query = "DELETE FROM USUARIO WHERE LOGIN = '{$login}';";
$conexao->exec($query);

header("Refresh:00; url=../../index.php");
