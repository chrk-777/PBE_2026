<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>

<h1>Calculadora de IMC</h1>

<form action="Logica.php" method="POST">

    <label>Nome:</label>
    <input type="text" name="nome" required>
    <br><br>

    <label>Peso em kg:</label>
    <input type="number" name="peso" step="0.01" required>
    <br><br>

    <label>Altura em metros:</label>
    <input type="number" name="altura" step="0.01" required>
    <br><br>

    <button type="submit">Calcular</button>

</form>

</body>
</html>