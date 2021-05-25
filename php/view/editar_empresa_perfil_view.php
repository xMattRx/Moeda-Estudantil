<!DOCTYPE html>
<html lang="pt-br">
<?php global $linha_editar;
$linha_editar = $_POST['editar']; ?>

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
            <form action="/php/controller/editar_empresa_perfil_controller.php" method="post">
                <h2>Editar Empresas</h2>
                <a href=""></a>
                <label for="nome">Nome</label>
                <input name="nome" id="nome" type="text">
                <label for="cnpj">CNPJ</label>
                <input name="cnpj" id="cnpj" type="number">
                <label for="senha">Senha</label>
                <input name="senha" id="senha" type="password">
                <input name="cadastrar_edicao" type="submit" value="editar">
                <input style="display: none" name="edicao" value=<?php echo $_POST['editar']; ?>>
                </input>
            </form>
        </div>

        <?php


        //login_senha();

        ?>
    </div>

</body>

</html>