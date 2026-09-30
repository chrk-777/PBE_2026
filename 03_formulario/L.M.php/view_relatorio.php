<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Inscrição em Evento</title>
</head>
<body>

    <h2 style="color:darkred; font-family: Comic Sans MS, cursive;">Inscrição em Evento</h2>

    <form action="view_relatorio.php" method="POST" style="color:purple; font-family:Times New Roman, serif; width: 300px; background-color: #f2e6f5; padding: 15px; border-radius: 5px;">
        
        <!-- Nome Completo -->
        <label for="nome">Nome Completo:</label><br>
        <input type="text" id="nome" name="nome" style="width:100%; margin-bottom:10px; color:purple; font-family:Arial;"><br>


        <label for="ingresso">Tipo de ingresso:</label><br>
        <select id="ingresso" name="ingresso" style="width:100%; margin-bottom:10px; color:purple; font-family:Arial;">
            <option value="estudante">Estudante</option>
            <option value="Profissional">Profissional</option>
            <option value="vip">vip</option>
        </select><br>

        <label for="data">Data do Evento:</label><br>
        <input type="date" id="data" name="data" style="width:100%; margin-bottom:10px; color:purple; font-family:Arial;"><br>

        <label for="hora">Hora de Chegada:</label><br>
        <input type="time" id="hora" name="hora" style="width:100%; margin-bottom:10px; color:purple; font-family:Arial;"><br><br>

        <input type="submit" value="Inscrever-se" style="background:purple; color:white; padding:5px 10px; border:none; cursor:pointer;">

    </form>

</body>
</html>