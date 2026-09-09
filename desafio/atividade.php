<?php

require_once 'funcao.php';

$resultado = calcularPedido("Notebook", 3500.00, 2, 10, 5);

// Exibição dos resultados
echo "Produto: " . $resultado['nome_produto'] . "<br>";
echo "Subtotal: R$ " . number_format($resultado['subtotal'], 2, ',', '.') . "<br>";
echo "Valor do Desconto: R$ " . number_format($resultado['valor_desconto'], 2, ',', '.') . "<br>";
echo "Valor do Imposto: R$ " . number_format($resultado['valor_imposto'], 2, ',', '.') . "<br>";
echo "Total Final: R$ " . number_format($resultado['total_final'], 2, ',', '.') . "<br>";

$totalcomfrete = calculofrete($resultado['totalfinal']);
echo "total com Frete". $totalComFrete;

?>
