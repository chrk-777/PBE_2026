<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado do IMC</title>
</head>
<body>

<h1>Resultado do IMC</h1>

<p><strong>Nome:</strong> <?php echo $nome; ?></p>

<p><strong>Peso:</strong> <?php echo $peso; ?> kg</p>

<p><strong>Altura:</strong> <?php echo $altura; ?> m</p>

<p><strong>Resultado IMC:</strong> <?php echo number_format($imc, 2, ',', '.'); ?></p>

<p><strong>Situação:</strong> <?php echo $situacao; ?></p>

</body>
</html>