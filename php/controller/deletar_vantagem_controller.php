<?php
include_once("/xampp/htdocs/php/controller/conexao.php");
include("/xampp/htdocs/php/controller/vantagem_controller.php");
global $conexao;
$linha = $_POST['deletar'];
$empresas = consultaEmpresa();
$id = $empresas[$linha]["ID"];
$query = "DELETE FROM EMPRESA WHERE ID = '{$id}';";
$conexao->exec($query);

header("Refresh:0; url=../view/listagem_vantagem_view.php");
