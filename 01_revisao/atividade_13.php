<?php
$arr = [
    "NOME: " => "Caua Henrik",
    "CPF: "=> 44688479808,
    "TELEFONE: " => 19989734204,
    "ENDEREÇO: " => "Rua capitão joaquim frauzino pereira"

];
echo "<pre>";
print_r($arr);
echo"</pre>";

foreach($arr as $posicao => $valor){
    echo "posição <strong> ". $posicao . $valor . "</strong>";
    echo "</br>";
}
?>