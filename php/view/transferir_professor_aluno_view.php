<?php
require_once("/xampp/htdocs/php/controller/conexao.php");
session_start();
include("/xampp/htdocs/php/controller/professor_controller.php");


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

<body style="color: #fff">
    <div class="container">
        <nav>
            <div class="menu">
                <ul>
                    <li><a href="../view/perfil_professor_view.php">Perfil</a></li>
                    <li><a href="../view/transferir_professor_aluno_view.php">Transferir moedas para alunos</a></li>
                    <li><a href="../controller/logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
        <div class="perfil">
            <form method="post" action="../controller/transferir_professor_aluno_controller.php">
                <label for="alunos">Alunos</label>
                <select name="login" id="alunos">
                    <?php
                    mostrar_alunos();
                    ?>
                </select> <br><br>
                <label for="moedas">Moedas</label>
                <input name="moedas" id="moedas" type="number"> <br><br>
                <input type="submit">
            </form>
        </div>

    </div>
</body>

</html>