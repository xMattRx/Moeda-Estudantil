<?php
require_once "Usuario.php";
class Aluno extends Usuario
{
    private $cpf;
    private $email;
    private $rg;
    private $endereco;
    private $curso;
    private $moedas = 0;
    private $instituicao;
    private $setado;

    public function __construct($cpf, $email, $rg, $endereco, $curso, $instituicao, $login)
    {
        $this->cpf = $cpf;
        $this->email = $email;
        $this->rg = $rg;
        $this->endereco = $endereco;
        $this->curso = $curso;
        $this->instituicao = $instituicao;
        $this->login = $login;
        $this->setado = true;
    }

    public function getCpf()
    {
        return $this->cpf;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        return $this->email = $email;
    }

    public function getRg()
    {
        return $this->rg;
    }
    public function setRg($rg)
    {
        return $this->rg = $rg;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setEndereco($endereco)
    {
        return $this->endereco = $endereco;
    }

    public function getCurso()
    {
        return $this->curso;
    }
    public function setCurso($curso)
    {
        return $this->curso = $curso;
    }

    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($login)
    {
        return $this->login = $login;
    }

    public function getInstituicao()
    {
        return $this->instituicao;
    }
    public function setInstituicao($instituicao)
    {
        return $this->Instituicao = $instituicao;
    }

    public function getMoedas()
    {
        return $this->moedas;
    }
    public function setMoedas($moedas)
    {
        return $this->moedas = $moedas;
    }

    public function getSetado()
    {
        return $this->setado;
    }

    public function visualizarExtrato()
    {
    }

    public function trocarMoedasPorVantagens()
    {
    }
}
