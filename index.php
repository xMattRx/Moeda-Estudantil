<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Moeda Estudantil</title>
    <link rel="stylesheet" href="/CSS/index.css">
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
            <form action="./php/controller/validar_login_controller.php" method="POST">
                <label for="login">Login</label>
                <input required name="login" id="login" type="text">
                <label for="senha">Senha</label>
                <input required name="senha" id="senha" type="password">

                <button name="validar" type="submit"><a>Entrar</a></button>
                <button><a href="./php/view/cadastro_aluno_view.php">Cadastrar-se como aluno</a></button>
                <button><a href="./php/view/cadastro_empresa_view.php">Cadastrar-se como Empresa</a></button>
            </form>
        </div>
    </div>

</body>

</html>