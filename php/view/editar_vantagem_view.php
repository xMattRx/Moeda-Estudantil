<!DOCTYPE html>
<html lang="pt-br">

<?php
session_start();

?>

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
            <form action="/php/controller/editar_vantagem_controller.php" enctype="multipart/form-data" method="post">
                <h2>Editar Vantagem</h2>
                <label for="moedas">Custo em moedas</label>
                <input required name="moedas" id="moedas" type="number">
                <label for="foto">Foto</label><br>
                <input required name="foto" id="foto" type="file"><br>
                <label for="nome">Nome</label><br>
                <input required name="nome" id="nome" type="text">
                <label for="descricao">Descricao</label><br>
                <input required name="descricao" id="descricao" type="text">
                <input type="text" name="cnpj" style="display:none" value="<?php echo $_SESSION['login'] ?> ">
                <input style="display: none" name="id" type="text" value=<?php echo $_POST['editar'] ?>>
                <input name="cadastrar_edicao" type="submit" value="editar">
            </form>
        </div>

        <?php


        //login_senha();

        ?>
    </div>

</body>

</html>