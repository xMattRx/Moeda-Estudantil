<?php
include("/xampp/htdocs/php/controller/empresa_controller.php");
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

    <h1>Listagem de Empresas</h1>
    <div class="container">
        <table>
            <tr>
                <th>CNPJ</th>
                <th>NOME</th>
            </tr>
            <?php
            $empresas = consultaEmpresa();
            $tamanho = count($empresas);
            $cont = 0;
            while ($cont < $tamanho) {
            ?>
                <tr>

                    <form method="POST" action="/php/view/editar_empresa_view.php">
                        <td><?php echo $empresas[$cont]["CNPJ"]; ?></td>
                        <td><?php echo $empresas[$cont]["NOME"]; ?></td>
                        <td><button type="submit" value=<?php echo $cont ?> name="editar">Editar</button></td>
                    </form>
                    <form method="POST" action="/php/controller/deletar_empresa_controller.php">
                        <td><button type="submit" value=<?php echo $cont ?> name="deletar">Deletar</button></td>
                    </form>
                </tr>
            <?php $cont += 1;
            } ?>
        </table>
    </div>

</body>

</html>