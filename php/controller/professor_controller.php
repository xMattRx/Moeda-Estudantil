<?php

function consultaProfessor()
{
    global $conexao;
    $consulta = "SELECT * FROM professor";
    $result = $conexao->query($consulta) or die($conexao->error);
    $professores = $result->fetchAll();
    return $professores;
}
