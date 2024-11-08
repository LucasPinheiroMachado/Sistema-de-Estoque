<?php
require_once 'Produto.php';

class ListaDeProdutos {
    private $listaDeProdutos;

    public function getListaDeProdutos()
    {
        $produto1 = new Produto();
        $produto1->setCodigo('ab1');
        $produto1->setNome('Banana');
        $produto1->setQtdEstoque(25);
        $produto1->setPreco(5.9);

        $produto2 = new Produto();
        $produto2->setCodigo('cd2');
        $produto2->setNome('Arroz');
        $produto2->setQtdEstoque(17);
        $produto2->setPreco(9.9);

        $produto3 = new Produto();
        $produto3->setCodigo('ef3');
        $produto3->setNome('Melancia');
        $produto3->setQtdEstoque(19);
        $produto3->setPreco(11.9);

        $produto4 = new Produto();
        $produto4->setCodigo('gh4');
        $produto4->setNome('Maçã');
        $produto4->setQtdEstoque(30);
        $produto4->setPreco(4.5);

        $produto5 = new Produto();
        $produto5->setCodigo('ij5');
        $produto5->setNome('Leite');
        $produto5->setQtdEstoque(50);
        $produto5->setPreco(6.7);

        $produto6 = new Produto();
        $produto6->setCodigo('kl6');
        $produto6->setNome('Feijão');
        $produto6->setQtdEstoque(15);
        $produto6->setPreco(8.3);

        $produto7 = new Produto();
        $produto7->setCodigo('mn7');
        $produto7->setNome('Carne');
        $produto7->setQtdEstoque(10);
        $produto7->setPreco(25.0);

        $produto8 = new Produto();
        $produto8->setCodigo('op8');
        $produto8->setNome('Batata');
        $produto8->setQtdEstoque(45);
        $produto8->setPreco(3.9);

        $produto9 = new Produto();
        $produto9->setCodigo('qr9');
        $produto9->setNome('Tomate');
        $produto9->setQtdEstoque(28);
        $produto9->setPreco(4.2);

        $produto10 = new Produto();
        $produto10->setCodigo('st10');
        $produto10->setNome('Macarrão');
        $produto10->setQtdEstoque(32);
        $produto10->setPreco(2.5);

        return $this->listaDeProdutos = [$produto1, $produto2, $produto3, $produto4, $produto5, 
        $produto6, $produto7, $produto8, $produto9, $produto10];
    }
}