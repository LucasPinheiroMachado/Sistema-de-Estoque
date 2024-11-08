<?php

class Produto
{
    private $codigo;
    private $nome;
    private $qtdEstoque;
    private $preco;

    public function calcularInventario()
    {
        return $this->qtdEstoque * $this->preco;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getQtdEstoque()
    {
        return $this->qtdEstoque;
    }
    public function setQtdEstoque($qtdEstoque)
    {
        if($qtdEstoque < 0){
            $this->qtdEstoque = 0;
            return;
        }
        $this->qtdEstoque = $qtdEstoque;
    }

    public function getPreco()
    {
        return $this->preco;
    }
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }
}
