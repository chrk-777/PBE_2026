<?php

class ContaBancaria {
    public string $titular;
    public float $saldo;

    public function __construct(string $titular, float $saldoInicial) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar(float $valor): void {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function sacar(float $valor): bool {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    public function exibirSaldo(): void {
        echo "<b>Dados da Conta Bancária</b><br><br>";
        echo "Titular: " . $this->titular . "<br>";
        echo "Saldo Atual: R$ " . number_format($this->saldo, 2, ',', '.') . "<br>";
    }
}

$minhaConta = new ContaBancaria("Caua Henrik", 7000.00);

$minhaConta->depositar(5000.00);
$minhaConta->sacar(2000.00);

$minhaConta->exibirSaldo();

?>
