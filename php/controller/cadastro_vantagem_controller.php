<?php

require_once("/xampp/htdocs/php/controller/conexao.php");
require_once("/xampp/htdocs/php/model/Vantagem.php");
require_once("/xampp/htdocs/php/controller/vantagem_controller.php");



cadastrar_vantagem();

function cadastrar_vantagem()
{

    if (isset($_POST['enviar'])) {

        $vantagem = criarVantagem($_POST['enviar']);

        if ($vantagem->getSetado() == true) {

            insertVantagem($vantagem);
        }
        header("Refresh:0; url=../view/perfil_empresa_view.php");
        exit;
    }
}
