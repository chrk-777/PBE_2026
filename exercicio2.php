<?php

function calcularPrecoFinal($precoProduto, $quantidadeComprada, $percentualDesconto) {
    $totalBruto = $precoProduto * $quantidadeComprada;
    $desconto = $totalBruto * ($percentualDesconto / 100);
    $precoFinal = $totalbruto * $quantidadeComprada;

    return $precoFinal;
}

// Exemplo de uso:
// R$ 50,00 cada, 3 unidades, 10% de desconto
$resultado = calcularPrecoFinal(50.00, 3, 10); 
echo "Preço final: R$ " . number_format($resultado, 2, ',', '.'); 
// Saída: Preço final: R$ 135,00

?>