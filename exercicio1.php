<?php

function verificarMaioridade(idade) {
    if (idade >= 18) {
        return "Maior de idade";
    } else {
        return "Menor de idade";
    }
}

$resultado1 = verificarMaioridade(18);
$resultado2 = verificarMaioridade(20);
$resultado3 = verificarMaioridade(15);

?>


    

