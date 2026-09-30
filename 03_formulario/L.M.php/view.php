<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Inscrição em Evento</title>
</head>

<body>

    <h2 style="color:darkred; font-family:Comic Sans MS, cursive;">
        Inscrição em Evento
    </h2>

    <form style="color:purple; font-family:Times New Roman, serif;">

        <label>Nome Completo:</label>
        <br>

        <input type="text" name="nome"
        style="width:100%; margin-bottom:10px; color:purple; font-family:Arial;">

        <label>Tipo de ingresso:</label>
        <br>

        <select name="ingresso"
        style="width:100%; margin-bottom:10px; color:purple; font-family:Arial;">

            <option value="estudante">Estudante</option>
            <option value="profissional">Profissional</option>
            <option value="vip">VIP</option>

        </select>

        <label>Data do Evento:</label>
        <br>

        <input type="date"
        style="color:purple; font-family:Arial;">

        <br><br>

        <label>Hora de Chegada:</label>
        <br>

        <input type="time"
        style="color:purple; font-family:Arial;">

        <br><br>

        <button type="submit"
        style="background:purple; color:white; padding:5px 10px;">
            Inscrever-se
        </button>

    </form>

</body>
</html>
