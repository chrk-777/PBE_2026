<?php

class Produto {
    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function vender($quantidade) {
        if ($quantidade > 0 && $quantidade <= $this->estoque) {
            $this->estoque -= $quantidade;
            echo "Venda realizada com sucesso! {$quantidade} unidade(s) de '{$this->nome}' vendida(s).<br>";
        } else {
            echo "Erro: Estoque insuficiente para realizar a venda de {$quantidade} unidade(s) de '{$this->nome}'.<br>";
        }
    }

    public function reajustarPreco($percentual) {
        $this->preco += $this->preco * ($percentual / 100);
        echo "Preço de '{$this->nome}' reajustado em {$percentual}%.<br>";
    }

    public function exibirInfo() {
        $precoFormatado = "R$ " . number_format($this->preco, 2, ',', '.');
        echo "Produto: {$this->nome} | Preço: {$precoFormatado} | Estoque: {$this->estoque} un.<br>";
    }
}

$p1 = new Produto("Notebook Gamer", 4500.00, 10);
$p1->exibirInfo();

$p1->vender(3);
$p1->exibirInfo();

$p1->vender(10);

$p1->reajustarPreco(10);
$p1->exibirInfo();

?>