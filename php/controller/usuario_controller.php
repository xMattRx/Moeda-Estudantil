<?php
function criarUsuario()
{
    if (isset($_POST['nome'])) {
        global $login;
        $usuario = new Usuario($login, addslashes($_POST['nome']), addslashes($_POST['senha']));
        return $usuario;
    }
}
function insertUsuario($usuario)
{
    global $conexao;
    $query = "INSERT INTO usuario (LOGIN, NOME, SENHA) VALUES ('{$usuario->getLogin()}', '{$usuario->getNome()}','{$usuario->getSenha()}')";
    $conexao->exec($query);
}
function consultaUsuario()
{
    global $conexao;
    $consulta = "SELECT * FROM usuario";
    $result = $conexao->query($consulta) or die($conexao->error);
    $usuarios = $result->fetchAll();
    return $usuarios;
}
