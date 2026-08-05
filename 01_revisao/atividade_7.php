<?php

$notasAlunos = [
    "Ana" => 8.5,
    "Bruno" => 7.0,
    "Carla" => 9.2,
    "Roberto" => 7.0,
    "Mariana" => 7.9
];

$somaNotas = 0;
$totalAlunos = count($notasAlunos);


foreach ($notasAlunos as $nome => $nota) {

    $notaFormatada = number_format($nota, 1, '.', '');
    echo "O aluno $nome tirou nota $notaFormatada.<br>";
    
    $somaNotas += $nota;
}

$mediaTurma = $somaNotas / $totalAlunos;
$mediaFormatada = number_format($mediaTurma, 1, '.', '');


echo "<br>Ao final exiba a média da turma media $mediaFormatada.";
?>