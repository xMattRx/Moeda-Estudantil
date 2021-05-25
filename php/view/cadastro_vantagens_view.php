<?php
session_start();


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
            <form action="/php/controller/cadastro_vantagem_controller.php" method="post" enctype="multipart/form-data">
                <h2>Cadastro de Vantagens</h2>
                <label for="moedas">Custo em moedas</label>
                <input required name="moedas" id="moedas" type="number">
                <label for="foto">Foto</label><br>
                <input required name="foto" id="foto" type="file"><br>
                <label for="nome">Nome</label><br>
                <input required name="nome" id="nome" type="text">
                <label for="descricao">Descricao</label><br>
                <input required name="descricao" id="descricao" type="text">
                <input type="text" name="cnpj" style="display:none" value="<?php echo $_SESSION['login'] ?> ">

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