<?php

class Estoque
{
    private $arrayProdutos;

    public function calcularInventarioTotal()
    {
        $total = 0;
        foreach ($this->arrayProdutos as $produto) {
            $total += $produto->calcularInventario();
        }
        return $total;
    }

    public function aumentarQtdEstoque($codigo, $qtd){
        foreach($this->arrayProdutos as $produto){
            if($produto->getCodigo() === $codigo){
                $qtdAtual = $produto->getQtdEstoque();
                $qtdTotal = $qtdAtual + $qtd;
                $produto->setQtdEstoque($qtdTotal);
                echo (PHP_EOL. 'Estoque do produto ('. $produto->getNome(). ') atualizado para '. $produto->getQtdEstoque(). PHP_EOL);
                return;
            }
        }
        echo (PHP_EOL.'Codigo Invalido'.PHP_EOL);
    }

    public function diminuirQtdEstoque($codigo, $qtd){
        foreach($this->arrayProdutos as $produto){
            if($produto->getCodigo() === $codigo){
                $qtdAtual = $produto->getQtdEstoque();
                $qtdTotal = $qtdAtual - $qtd;
                $produto->setQtdEstoque($qtdTotal);
                echo (PHP_EOL. 'Estoque do produto ('. $produto->getNome(). ') atualizado para '. $produto->getQtdEstoque(). PHP_EOL);
                return;
            }
        }
        echo (PHP_EOL.'Codigo Invalido'.PHP_EOL);
    }

    public function alterarPreco($codigo, $valor){
        foreach($this->arrayProdutos as $produto){
            if($produto->getCodigo() === $codigo){
                $produto->setPreco($valor);
                echo (PHP_EOL. 'Preço do produto ('. $produto->getNome() . ') alterado para R$'. $produto->getPreco());
                return;
            }
        }
        echo (PHP_EOL.'Codigo Invalido'.PHP_EOL);
    }

    public function adicionarProduto(Produto $produto) {
        $this->arrayProdutos[] = $produto;
    }

    public function removerProduto($codigo){
        foreach($this->arrayProdutos as $index => $produto){
            if($produto->getCodigo() === $codigo){
                unset($this->arrayProdutos[$index]);
                echo('Produto ('. $produto->getNome(). ') removido'. PHP_EOL);
                return;
            }
        }
        echo(PHP_EOL. 'Codigo invalido'. PHP_EOL);
    }

    public function getArrayProdutos()
    {
        return $this->arrayProdutos;
    }
    public function setArrayProdutos($arrayProdutos)
    {
        $this->arrayProdutos = $arrayProdutos;
    }
}
