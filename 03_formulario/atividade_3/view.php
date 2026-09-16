<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculao do Salário</title>
</head>
<body>

    <form action="logica.php" method="POST">
        <label for="num1">Primeiro Número:</label>
        <input type="number" id="num1" name="num1" step="any" required>
        <br><br>

        <label for="num2">Segundo Número:</label>
        <input type="number" id="num2" name="num2" step="any" required>
        <br><br>

        <label for="operacao">Operação:</label>
        <select id="operacao" name="operacao">
            <option value="Soma">Soma</option>
            <option value="Subtração">Subtração</option>
            <option value="Multiplicação">Multiplicação</option>
            <option value="Divisão">Divisão</option>
        </select>
        <br><br>

        <button type="submit">Calcular</button>
    </form>

</body>
</html>
