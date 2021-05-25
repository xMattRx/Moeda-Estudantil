<?php
require_once("/xampp/htdocs/php/model/Usuario.php");
class Empresa extends Usuario
{
    private $cnpj;
    private $nome;
    private $setado;

    public function __construct($cnpj, $nome, $login)
    {
        $this->cnpj = $cnpj;
        $this->nome = $nome;
        $this->login = $login;
        $this->setado = true;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getLogin()
    {
        return $this->login;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }
    public function getSetado()
    {
        return $this->setado;
    }
}
