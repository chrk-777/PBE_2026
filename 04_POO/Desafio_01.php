
<?php

class Pedido {

    private $cliente;
    private $valorItens;

    public function __construct($cliente) {
        $this->cliente = $cliente;
        $this->valorItens = 0;
    }

    public function adicionarItem($valor) {
        $this->valorItens = $this->valorItens + $valor;
    }

    public function getTotal() {
        return $this->valorItens;
    }

    public function exibirPedido() {
        echo "Cliente: " . $this->cliente . "<br>";
        echo "Total dos itens: R$ " . $this->valorItens . "<br>";
    }
}

class NotaFiscal {

    private $totalPedido;
    private $imposto;
    private $totalPagar;

    public function __construct($totalPedido, $imposto = 10) {
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
    }

    public function calcularTotal() {
        $valorImposto = $this->totalPedido * $this->imposto / 100;
        $this->totalPagar = $this->totalPedido + $valorImposto;
    }

    public function exibirNota() {
        $valorImposto = $this->totalPedido * $this->imposto / 100;

        echo "<h2>Nota Fiscal</h2>";
        echo "Subtotal: R$ " . $this->totalPedido . "<br>";
        echo "Imposto: " . $this->imposto . "%<br>";
        echo "Valor do imposto: R$ " . $valorImposto . "<br>";
        echo "Total a pagar: R$ " . $this->totalPagar . "<br>";
    }
}

$pedido = new Pedido("Cauã");

$pedido->adicionarItem(120);
$pedido->adicionarItem(60);
$pedido->adicionarItem(20);

$pedido->exibirPedido();

$nota = new NotaFiscal($pedido->getTotal(), 10);

$nota->calcularTotal();
$nota->exibirNota();

?>