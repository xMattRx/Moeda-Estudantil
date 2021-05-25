<?php
require_once("/xampp/htdocs/php/controller/conexao.php");
require_once("/xampp/htdocs/php/controller/validar_login_controller.php");


validar_login();

$consulta = "SELECT CNPJ FROM EMPRESA WHERE LOGIN_USUARIO = {$_SESSION['login']} ";
$result = $conexao->query($consulta) or die($conexao->error);
$empresas = $result->fetchAll();
$cnpjCadastro = $empresas[0]["CNPJ"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="/php/controller/cadastro_vantagem_controller.php">

        <h2>Cadastro de Vantagens</h2>
        <a href=""></a>
        <label for="custo_moeda">Moedas</label>
        <input required name="custo_moeda" id="custo_moeda" type="text">
        <label for="nome">Nome</label>
        <input required name="nome" id="nome" type="type">
        <label for="descricao">Descricao</label>
        <input required name="descricao" id="descricao" type="text">
        <input name="cnpj" style="display: none" value=<?php echo $cnpjCadastro ?> type="text">

        <input required name="enviar" type="submit" value="Cadastrar">

        <button><a href="/index.php">Voltar</a></button>
    </form>



</body>

</html>