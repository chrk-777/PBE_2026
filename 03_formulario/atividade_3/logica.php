<?php

$num1 = $_POST['primeironumero'];
$num2 = $_POST['segundonumero'];
$operacao = $_POST ['operacao'];

if ($operacao == "+"){
    $resultado = $num1 + $num2;
    echo $resultado;
}

elseif ($operacao == "-"){
    $resultado = $num1 - $num2;
    echo $resultado;
}

elseif ($operacao == "x"){
     $resultado = $num1 * $num2;
     echo $resultado;
}
elseif ($operacao == "/"){
    if ($num2 == 0){
        echo "Erro!";
    }
    else {
        $resultado = $num1 / $num2;
        echo $resultado;
    }
    else{
        echo "Selecione uma operação válida";
    }
}
?>
