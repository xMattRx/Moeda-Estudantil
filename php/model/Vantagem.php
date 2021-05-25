<?php

class Vantagem
{
    private $custo_moedas;
    private $foto;
    private $nome;
    private $descricao;
    private $cnpj_empresas;

    public function __construct($custo_moedas, $foto, $nome, $descricao, $cnpj_empresas)
    {
        $this->custo_moedas = $custo_moedas;
        $this->foto = $foto;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->cnpj_empresas = $cnpj_empresas;
        $this->setado = true;
    }

    public function getMoedas()
    {
        return $this->custo_moedas;
    }
    public function setMoedas($custo_moedas)
    {
        $this->custo_moedas = $custo_moedas;
    }

    public function getFoto()
    {
        return $this->foto;
    }
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function getCnpj()
    {
        return $this->cnpj_empresas;
    }
    public function setCnpj($cnpj_empresas)
    {
        $this->cnpj_empresas = $cnpj_empresas;
    }

    public function getSetado()
    {
        return $this->setado;
    }
}
