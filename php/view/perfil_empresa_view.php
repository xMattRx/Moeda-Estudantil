<?php
require_once("/xampp/htdocs/php/controller/conexao.php");
session_start();
include("/xampp/htdocs/php/controller/empresa_controller.php");
include("/xampp/htdocs/php/controller/usuario_controller.php");
/*
echo "Logado: " . $_SESSION['logado'];
echo "Login: " . $_SESSION['login'];
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Moeda Estudantil</title>
    <link rel="stylesheet" href="/CSS/reset.css">
    <link rel="stylesheet" href="/CSS/perfil.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/Assets/moeda.png" />
</head>

<body>
    <div class="container">
        <nav>
            <div class="menu">
                <ul>
                    <li><a href="../view/perfil_empresa_view.php">Perfil</a></li>
                    <li><a href="../view/cadastro_vantagens_view.php">Cadastrar Vantagens</a></li>
                    <li><a href="../view/listagem_vantagens_view.php">Visualizar Vantagens</a></li>
                    <li><a href="../controller/logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
        <div class="perfil">
            <table>
                <tr>
                    <th>CNPJ</th>
                    <th>NOME</th>
                    <th>LOGIN</th>
                    <th>SENHA</th>
                </tr>
                <?php
                $empresas = consultaEmpresa();
                $tamanho = count($empresas);
                $cont = 0;
                $encontrou_empresa;
                while ($cont < $tamanho) {
                    if ($empresas[$cont]["LOGIN_USUARIO"] == $_SESSION['login']) {
                        $encontrou_empresa = $cont;
                    }
                    ++$cont;
                }
                $usuarios = consultaUsuario();
                $tamanho = count($usuarios);
                $cont = 0;
                $encontrou_usuario;
                while ($cont < $tamanho) {
                    if ($usuarios[$cont]["LOGIN"] == $_SESSION['login']) {
                        $encontrou_usuario = $cont;
                    }
                    ++$cont;
                }
                ?>
                <tr>

                    <form method="POST" action="/php/view/editar_empresa_perfil_view.php">
                        <td><?php echo $empresas[$encontrou_empresa]["CNPJ"]; ?></td>
                        <td><?php echo $empresas[$encontrou_empresa]["NOME"]; ?></td>
                        <td><?php echo $usuarios[$encontrou_usuario]["LOGIN"]; ?></td>
                        <td><?php echo $usuarios[$encontrou_usuario]["SENHA"]; ?></td>
                        <td><button type="submit" value=<?php echo $encontrou_empresa ?> name="editar">Editar</button></td>
                    </form>
                    <form method="POST" action="/php/controller/deletar_empresa_perfil_controller.php">
                        <td><button type="submit" value=<?php echo $encontrou_empresa ?> name="deletar">Deletar</button></td>
                    </form>
                </tr>

        </div>

    </div>
</body>

</html>