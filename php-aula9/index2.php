<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Idade</title>
</head>
<body>
    <h1>Calculo de Idade</h1>
    <?php
    $nome = $_REQUEST["nome"];
    $nasc = $_REQUEST["nasc"];
    $atual = date("Y");
    $idade = $atual - $nasc;
    echo $nome . " a sua idade é " . $idade . " anos.";

?>

    <p>
        <input type="button" value="voltar" onclick="javascript:history.back();">
    </p>
</body>
</html>