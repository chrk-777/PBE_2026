<?php

class ContaBancaria
{
    public $titular;
    public $numero;
    public $saldo;
    public $tipo;

    public function depositar($valor)
    {
        $this->saldo = $this->saldo + $valor;
        echo "Depósito realizado!<br>";
    }

    public function sacar($valor)
    {
        $this->saldo = $this->saldo - $valor;
        echo "Saque realizado!<br>";
    }

    public function consultarSaldo()
    {
        echo "Saldo: R$ " . $this->saldo . "<br>";
    }
}


// Primeiro objeto
$conta1 = new ContaBancaria();

$conta1->titular = "Cauã";
$conta1->numero = "1234";
$conta1->saldo = 10000;
$conta1->tipo = "Corrente";

echo "<h2>Conta 1</h2>";

echo "Titular: " . $conta1->titular . "<br>";
echo "Número: " . $conta1->numero . "<br>";
echo "Tipo: " . $conta1->tipo . "<br>";

$conta1->consultarSaldo();
$conta1->depositar(2500);
$conta1->consultarSaldo();
$conta1->sacar(4000);
$conta1->consultarSaldo();


// segundo objeto
$conta2 = new ContaBancaria();

$conta2->titular = "Pedro B.";
$conta2->numero = "5678";
$conta2->saldo = 1621;
$conta2->tipo = "Poupança";

echo "<h2>Conta 2</h2>";

echo "Titular: " . $conta2->titular . "<br>";
echo "Número: " . $conta2->numero . "<br>";
echo "Tipo: " . $conta2->tipo . "<br>";

$conta2->consultarSaldo();
$conta2->depositar(100);
$conta2->consultarSaldo();
$conta2->sacar(650);
$conta2->consultarSaldo();

?>