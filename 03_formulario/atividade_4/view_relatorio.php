<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>

<body>

<h1>Resultado do Aluno</h1>

<p>Nome: <?php echo $nome; ?></p>

<p>Nota 1: <?php echo $nota1; ?></p>

<p>Nota 2: <?php echo $nota2; ?></p>

<p>Nota 3: <?php echo $nota3; ?></p>

<p>Média Final: <?php echo number_format($media, 2, ',', '.'); ?></p>

<?php

if ($media >= 7) {
    echo "<p>Aprovado</p>";
} else {
    echo "<p>Reprovado</p>";
}

if ($media == 10) {
    echo "<p>Você atingiu a nota máxima!</p>";
}

?>

</body>
</html>
