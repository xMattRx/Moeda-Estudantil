<?php
include("/xampp/htdocs/php/controller/aluno_controller.php")
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

<body>

    <h1>Listagem de alunos</h1>
    <div class="container">
        <table>
            <tr>
                <th>CPF</th>
                <th>EMAIL</th>
                <th>RG</th>
                <th>ENDERECO</th>
                <th>CURSO</th>
                <th>MOEDAS</th>
            </tr>
            <?php
            $alunos = consultaAluno();
            $tamanho = count($alunos);
            $cont = 0;
            while ($cont < $tamanho) {
            ?>
                <tr>
                    <td><?php echo $alunos[$cont]["CPF"]; ?></td>
                    <td><?php echo $alunos[$cont]["EMAIL"]; ?></td>
                    <td><?php echo $alunos[$cont]["RG"]; ?></td>
                    <td><?php echo $alunos[$cont]["ENDERECO"]; ?></td>
                    <td><?php echo $alunos[$cont]["CURSO"]; ?></td>
                    <td><?php echo $alunos[$cont]["MOEDAS"]; ?></td>
                </tr>
            <?php $cont += 1;
            } ?>
        </table>
    </div>

</body>

</html>