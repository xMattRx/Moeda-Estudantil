<?php
include("../controller/vantagem_controller.php");



function listar_vantagens()
{
    global $conexao;
    $cont = 0;
    $consulta = "SELECT * FROM vantagem";
    $result = $conexao->query($consulta) or die($conexao->error);
    $vantagens = $result->fetchAll();
    while ($cont < count($vantagens)) {
        $foto = $vantagens[$cont]['FOTO'];
        $descricao = $vantagens[$cont]['DESCRICAO'];
        $moedas = $vantagens[$cont]['CUSTO_MOEDAS'];
        echo
        "<form method='POST' action='../controller/trocar_controller.php'>
        <div class='vantagem'>
                <p>" . $vantagens[$cont]['NOME'] . "</p>
                <img width='100px' src= '../../Assets/$foto' />" . "<p> $moedas </p>" .
            "<input style=display:none name=moedas value=$moedas></input>" .
            "<p> $descricao </p>" .
            "<button name=trocar>Trocar</button>" .
            "</div>
             </form>";
        $cont +=  1;
    }
}
