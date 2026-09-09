<?php
$frequencia1 = 90;
$media1 = 9;

echo "Leonardo - ";
if ($frequencia1 <75) { // frequencia insufiente
    echo "Reprovado por falta";
}
elseif ($media1 >= 7) { // Maior que 7 aprovado
    echo "aprovado";
    
}
elseif ($media >= 5){
    echo "Recuperação"
}
else{
    echo "reprovado!"

}
 
?>