<?php

class Vantagem
{

    private $id;
    private $custo_moedas;
    private $nome;
    private $descricao;
    private $cnpj_empresas;

    public function __construct($custo_moedas, $nome, $descricao, $cnpj_empresas)
    {
        $this->custo_moedas = $custo_moedas;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->cnpj_empresas = $cnpj_empresas;
        $this->setado = true;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCusto_Moedas()
    {
        return $this->custo_moedas;
    }
    public function setCusto_Moedas($custo_moedas)
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
    public function getCNPJ_Empresa()
    {
        return $this->cnpj_empresas;
    }
    public function setCNPJ_Empresa($cnpj_empresas)
    {
        $this->cnpj_empresas = $cnpj_empresas;
    }

    public function getSetado()
    {
        return $this->setado;
    }
}
