<?php

$nome = $_POST['nome'] ?? 'Não informado';
$ingresso = $_POST['ingresso'] ?? 'Não informado';
$data = $_POST['data'] ?? 'Não informada';
$hora = $_POST['hora'] ?? 'Não informada';

if (!empty($data) && $data != 'Não informada') {
    $data = date("d/m/Y", strtotime($data));
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Inscrição</title>
</head>
<body style="font-family: Arial, sans-serif; color: purple;">

    <h2>Relatório da Inscrição</h2>

    <p><strong>Nome Completo:</strong> <?php echo $nome; ?></p>
    <p><strong>Tipo de Ingresso:</strong> <?php echo $ingresso; ?></p>
    <p><strong>Data do Evento:</strong> <?php echo $data; ?></p>
    <p><strong>Hora de Chegada:</strong> <?php echo $hora; ?></p>

    <br>
    <a href="index.php" style="color: purple;">← Voltar ao Formulário</a>

</body>
</html>