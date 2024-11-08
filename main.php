<?php
require_once 'Produto.php';
require_once 'Estoque.php';
require_once 'ListaDeProdutos.php';
require_once 'ListarProdutos.php';

function continuar(){
    do {
        $continuar = readline("Deseja continuar no sistema? S/N: ");
        
        if (strtolower($continuar) !== 's' && strtolower($continuar) !== 'n') {
            echo "Erro: Por favor, digite 'S' para sim ou 'N' para não." . PHP_EOL;
        }
    } while (strtolower($continuar) !== 's' && strtolower($continuar) !== 'n');

    if (strtolower($continuar) === 'n') {
        echo "Operação finalizada." . PHP_EOL;
        return false;
    } else {
        return true;
    }
}

$listaDeProdutos = new ListaDeProdutos();
$lista = $listaDeProdutos->getListaDeProdutos();
$estoque = new Estoque();
$estoque->setArrayProdutos($lista);
$ativo = true;

while($ativo){
    echo (PHP_EOL. 'Selecione a opção desejada:'. PHP_EOL. PHP_EOL. '1- Ver produtos'. PHP_EOL. '2- Adicionar Produto'. PHP_EOL. '3- Excluir Produto'. PHP_EOL. '4- Aumentar Estoque'. PHP_EOL. '5- Diminuir Estoque'. PHP_EOL. '6- Alterar Valor'. PHP_EOL . '7- Calcular Inventario'. PHP_EOL. '8- Sair'. PHP_EOL. PHP_EOL);
    $opcao = readline();
    switch ($opcao){

        case 1: listarProdutos($estoque->getArrayProdutos());
                $ativo = continuar();
                break;

        case 2: $codigo = readline('Informe o código do produto: ');
                $nome = readline('Informe o nome do produto: ');
                $qtdEstoque = readline('Informe a quantidade em estoque: ');
                $preco = readline('Informe o preço do produto: ');

                $novoProduto = new Produto();
                $novoProduto->setCodigo($codigo);
                $novoProduto->setNome($nome);
                $novoProduto->setQtdEstoque((int)$qtdEstoque);
                $novoProduto->setPreco((float)$preco);

                $estoque->adicionarProduto($novoProduto);
                echo ('Produto adicionado com sucesso!'. PHP_EOL);
                $ativo = continuar();
                break;
        
        case 3: $codigo = readline('Informe o código do produto: ');
                $estoque->removerProduto($codigo);
                $ativo = continuar();
                break;

        case 4: $codigo = readline('Informe o código do produto: '); 
                $validando = true;
                do {
                    $valor = readline('Digite o valor para aumentar o estoque: ');
                    if (!is_numeric($valor) || intval($valor) != $valor || intval($valor) < 1) {
                        echo 'Erro: Por favor, insira um número inteiro positivo.' . PHP_EOL;
                    } else {
                        $valor = (int)$valor; // Converte para inteiro
                        $validando = false;
                    }
                } while ($validando);
                $estoque->aumentarQtdEstoque($codigo, $valor);
                $ativo = continuar();
                break;

        case 5: $codigo = readline('Informe o código do produto: '); 
                $validando = true;
                do {
                    $valor = readline('Digite o valor para diminuir o estoque: ');
                    if (!is_numeric($valor) || intval($valor) != $valor || intval($valor) < 1) {
                        echo 'Erro: Por favor, insira um número inteiro positivo.' . PHP_EOL;
                    } else {
                        $valor = (int)$valor; // Converte para inteiro
                        $validando = false;
                    }
                } while ($validando);
                $estoque->diminuirQtdEstoque($codigo, $valor);
                $ativo = continuar();
                break;

        case 6: $codigo = readline('Informe o código do produto: ');
                $validando = true;
                        do {
                            $valor = readline('Digite o novo valor: ');
                            if (!is_numeric($valor) || $valor < 0.01) {
                                echo 'Erro: Por favor, insira um número positivo maior que zero.' . PHP_EOL;
                            } else {
                                $valor = $valor; // Converte para inteiro
                                $validando = false;
                            }
                        } while ($validando); 
                $estoque->alterarPreco($codigo, $valor);
                $ativo = continuar();
                break;

        case 7: $valorInventario = $estoque->calcularInventarioTotal();
                echo(PHP_EOL. 'O valor do inventario é '. $valorInventario. PHP_EOL);
                $ativo = continuar();
                break;

        case 8: $ativo = continuar();

    }
}


