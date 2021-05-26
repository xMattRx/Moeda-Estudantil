<?php
include_once("/xampp/htdocs/php/controller/conexao.php");
include("/xampp/htdocs/php/controller/vantagem_controller.php");
global $conexao;
$linha = $_POST['deletar'];
$query = "DELETE FROM VANTAGEM WHERE ID = '{$linha}';";
$conexao->exec($query);

header("Refresh:00; url=../view/listagem_vantagens_view.php ");
