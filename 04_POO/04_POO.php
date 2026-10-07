<?php

class Pedido

{
    public $numero;
    public $cliente;
    public $valor;
    public $status;

    public function adicionarItem ($valor);

    {
        $this->valor = $this->valor + $valor;
        echo "Item adicionado!<br>";
    }

    public function cancelar()
    {
        $this->status = "Cancelado";
        echo "Pedido cancelado!<br>";
    }

    public function finalizar()
    {
        $this->status = "Finalizado";
        echo "Pedido finalizado!<br>";
    }

    public function exibirResumo()
    {
        echo "Número: " . $this->numero . "<br>";
        echo "Cliente: " . $this->cliente . "<br>";
        echo "Valor: R$ " . $this->valor . "<br>";
        echo "Status: " . $this->status . "<br>";
    }
}


// OBJETO 1

$pedido1 = new Pedido();

$pedido1->numero = 1;
$pedido1->cliente = "João";
$pedido1->valor = 100;
$pedido1->status = "Aguardando";

echo "<h2>Pedido 1</h2>";

$pedido1->exibirResumo();

$pedido1->adicionarItem(50);
$pedido1->finalizar();

echo "<h3>Dados atualizados:</h3>";

$pedido1->exibirResumo();

// Segundo objeto

$pedido2 = new Pedido();

$pedido2->numero = 2;
$pedido2->cliente = "Maria";
$pedido2->valor = 200;
$pedido2->status = "Aguardando";

echo "<h2>Pedido 2</h2>";

$pedido2->exibirResumo();

$pedido2->adicionarItem(30);
$pedido2->cancelar();

echo "<h3>Dados atualizados:</h3>";

$pedido2->exibirResumo();

?>
