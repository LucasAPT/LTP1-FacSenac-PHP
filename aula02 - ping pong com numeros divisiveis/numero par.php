<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // EM ASPAS SIMPLES ESCREVE EXATAMENTE O TEXTO
    echo '<h1>For</h1>';
    // LAÇO QUE EXIBE NÚMEROS PARES
    for($i = 0; $i <= 10; $i++)
        if ($i%2===0) {
            // EM ASPAS DUPLAS CONSIDERA A VARIÁVEL
        echo "<p>$i</p>";
        }
    
    ?>
    
</body>
</html>