<?php

$a = 1;
$b = -5;
$c = 6;

$delta = ($b ** 2) - (4 * $a * $c);

if ($delta < 0) {
    echo "Não existem raizes reais"
} else {
    // 1.1: Resolução da fórmula de Bhaskara
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);

    // 1.4: Exibição dos resultados finais
    echo "Valor de x1: " . $x1 . "\n";
    echo "Valor de x2: " . $x2 . "\n";
}
?>