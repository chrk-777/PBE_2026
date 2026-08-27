<?php
$frequencia1 = 90;
$media1 = 9;

echo "Caua - ";
if ($frequencia1 <75) { // frequencia insufiente
    echo "Reprovado por falta";
}
elseif ($media1 >= 7) { // Maior que 7 aprovado
    echo "aprovado";
    
}
elseif ($media1 >= 5){ // nota entre 5 e 6.9 = recuperaçao
    echo "Recuperação";
}
else{ // media insuficiente reprovado
    echo "reprovado!";

}

?>