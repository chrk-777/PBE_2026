<?php

$nome = $_POST["nome"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];

$imc = $peso / ($altura * $altura);

if ($imc > 10) {
    $imc = 10;
}

include("view_relatorio.php");

?>