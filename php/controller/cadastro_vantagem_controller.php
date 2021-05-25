<?php
require_once("../controller/conexao.php");
require_once("../controller/vantagem_controller.php");
require_once("../model/Vantagem.php");


if (isset($_POST['enviar'])) {

    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
    $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    if (in_array($extensao, $formatosPermitidos)) {
        $pasta = "../../Assets/";
        $temporario = $_FILES['foto']['tmp_name'];
        $novoNome = uniqid() . ".$extensao"; //Vai para o insert do banco de dados
        $vantagem = criarVantagem($novoNome);
        if ($vantagem->getSetado()) {
            insertVantagem($vantagem);
        }
        move_uploaded_file($temporario, $pasta . $novoNome);
        header("Refresh:0; url=../view/perfil_empresa_view.php");
    } else {
        echo "Formato inválido";
    }
}
