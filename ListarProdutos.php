<?php

    function listarProdutos($listaDeProdutos){
        foreach($listaDeProdutos as $produto){
            echo(PHP_EOL. $produto->getCodigo() . '- ' . $produto->getNome() . ' | qtd: '. $produto->getQtdEstoque(). ' | preço: '. $produto->getPreco(). PHP_EOL);
        }
    }