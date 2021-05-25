<?php

class Usuario
{
    //login: int, nome: string, senha: string
    private $login;
    private $nome;
    private $senha;
    private $setado;

    public function __construct($login, $nome, $senha)
    {
        $this->login = $login;
        $this->nome = $nome;
        $this->senha = $senha;
        $this->setado = true;
    }

    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function getSetado()
    {
        return $this->setado;
    }
}
