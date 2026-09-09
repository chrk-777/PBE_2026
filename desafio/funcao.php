<?php

function calcularPedido($nomeProduto, $precoUnitario, $quantidade, $percentualDesconto = 0, $percentualImposto = 0) {

    $subtotal = $precoUnitario * $quantidade;
    
    $valorDesconto = $subtotal * ($percentualDesconto / 100);

    $subtotalComDesconto = $subtotal *  ($percentualDesconto / 100);

    $subtotalComDesconto = $subtotal - $valorDesconto;
    
    $valorImposto = $subtotalComDesconto * ($percentualImposto / 100);
    
    $totalFinal = $subtotalComDesconto + $valorImposto;

    return [
        'nome_produto'   => $nomeProduto,
        'subtotal'       => $subtotal,
        'valor_desconto' => $valorDesconto,
        'valor_imposto'  => $valorImposto,
        'total_final'    => $totalFinal
    ];
}

?>
