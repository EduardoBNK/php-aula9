<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP AULA 9</title>
</head>
<body>
    
    <?php

    $nomes = array("Joao", "Maria", "Pedro", "Ana","Alek","Rodrigo","Manu","Gabriel","Eduardo");
    
    
    echo "<h2>Lista de Nomes</h2>";
    echo "<ul>";

    foreach($nomes as $nome){
        echo "<li>$nome</li>";
        
    }
    echo "</ul>";




    $nomes2 = array("Alek","Rodrigo","Manu","Gabriel","Eduardo");

    echo "<h2>Nomes Adicionais</h2>";
    echo "<ul>";
    sort( $nomes2);
    foreach($nomes2 as $nome1){
        echo "<li>$nome1</li>";

    }
    echo "</ul>";

    unset($nomes2[1]);
    echo "Numero Atualizado:\n";
    print_r($nomes2);
?>


</body>
</html>