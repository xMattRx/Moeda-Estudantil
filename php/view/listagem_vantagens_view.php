<?php
include("/xampp/htdocs/php/controller/vantagem_controller.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Moeda Estudantil</title>

    <link rel="stylesheet" href="/CSS/reset.css">
    <link rel="stylesheet" href="/CSS/listagem_alunos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/Assets/moeda.png" />

</head>

<body style="color: white;">

    <h1>Listagem de vantagens</h1>
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>CUSTO EM MOEDAS</th>
                <th>FOTO</th>
                <th>NOME</th>
                <th>DESCRICAO</th>

            </tr>
            <?php

            $vantagens = consultaVantagem($_SESSION['login']);
            $tamanho = count($vantagens);
            $cont = 0;
            while ($cont < $tamanho) {
            ?>
                <tr>
                    <form method="POST" action="/php/view/editar_vantagem_view.php">
                        <td><?php echo $vantagens[$cont]["ID"]; ?></td>
                        <td><?php echo $vantagens[$cont]["CUSTO_MOEDAS"]; ?></td>
                        <td><img src="/Assets/<?php echo $vantagens[$cont]["FOTO"]; ?>" alt=""></td>
                        <td><?php echo $vantagens[$cont]["NOME"]; ?></td>
                        <td><?php echo $vantagens[$cont]["DESCRICAO"]; ?></td>
                        <td><button type="submit" value=<?php echo $vantagens[$cont]["ID"] ?> name="editar">Editar</button></td>
                    </form>
                    <form method="POST" action="/php/controller/deletar_vantagem_controller.php">
                        <td><button type="submit" value=<?php echo $vantagens[$cont]["ID"] ?> name="deletar">Deletar</button></td>
                    </form>
                </tr>
            <?php $cont += 1;
            }
            ?>
        </table>
    </div>

</body>

</html>