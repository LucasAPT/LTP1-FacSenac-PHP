<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p>ESCREVA UM PROGRAMA QUE MOSTRE OS NÚMEROS DE 1 A 100</p>
<p>SE FOR DIVISÍVEL POR 3, MOSTRE "PING"</p>
<p>SE FOR DIVISÍVEL POR 5, MOSTRE "PONG"</p>
<p>SE FOR DIVISÍVEL POR 3 E 5, MOSTRA "PING PONG"</p>    
    
    <?php
    // EM ASPAS SIMPLES ESCREVE EXATAMENTE O TEXTO
    echo '<h1>For</h1>';
    // LAÇO
    for($i = 1; $i <= 100; $i++)
        // ESSE TEVE QUE VIR PRIMEIRO   
        if ($i%3 === 0 && $i%5 === 0) {
        echo "<p>PING PONG</p>";
        }
        
        elseif ($i%3 === 0) {
            echo "<p>PING</p>";
        } 
        
        elseif ($i%5 === 0) {
            echo "<p>PONG</p>";
        }

        else {
            echo "<p>$i</p>";
        }
    
    ?>
    
</body>
</html>
