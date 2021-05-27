<?php

require_once("../controller/conexao.php");
require_once("../controller/vantagem_controller.php");
require_once("../model/Vantagem.php");
$id = $_POST['id'];

if (isset($_POST['cadastrar_edicao'])) {

    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");

    $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    if (in_array($extensao, $formatosPermitidos)) {
        $pasta = "../../Assets/";
        $temporario = $_FILES['foto']['tmp_name'];
        $novoNome = uniqid() . ".$extensao"; //Vai para o insert do banco de dados
        $vantagem = criarVantagem($novoNome);
        if ($vantagem->getSetado()) {
            updateVantagem($vantagem, $id);
        }
        move_uploaded_file($temporario, $pasta . $novoNome);
        header("Refresh:0; url=../view/listagem_vantagens_view.php");
    } else {
        echo "Formato inválido";
    }
}
