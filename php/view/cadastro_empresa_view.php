<?php
//require_once("/xampp/htdocs/php/controller/cadastro_empresa_controller.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Moeda Estudantil</title>
    <link rel="stylesheet" href="/CSS/cadastro.css">
    <link rel="stylesheet" href="/CSS/reset.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/Assets/moeda.png" />
</head>

<body>

    <div class="container">
        <div class="quadro-cadastro">
            <form action="/php/controller/cadastro_empresa_controller.php" method="post">
                <h2>Cadastro de Empresas</h2>
                <a href=""></a>
                <label for="nome">Nome</label>
                <input required name="nome" id="nome" type="text">
                <label for="senha">Senha</label>
                <input required name="senha" id="senha" type="password">
                <label for="cnpj">CNPJ</label>
                <input required name="cnpj" id="cnpj" type="number">

                <input required name="enviar" type="submit" value="Cadastrar">
                <button><a href="/index.php">Voltar</a></button>
            </form>
        </div>

        <?php


        //login_senha();

        ?>
    </div>

</body>

</html>