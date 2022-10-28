<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- VETOR ATÉ 100 E SOMAR TODOS OS ELEMENTOS -->
    <?php
        // VETOR VAZIO QUE IRÁ ARMAZENAR A ITERAÇÃO
        $numero = [];
        // $numero CARREGA CONSIGO UM ÍNDICE E SERÁ IGUAL A ESSE $index +1 ATÉ 100
        for ($index = 0; $index < 100; $index++) {
            $numero[$index] = $index + 1;
            echo "<p>$numero[$index]</p>";
        }

        $index = 0; // variável contadora
        $soma = 0; // precisa iniciar a varíavel
        while ($index < 100) {
            $soma += $numero[$index]; // $soma = $soma + $numero[$index];
            $index++;
        }
        echo "<p>Soma de todos os elementos: $soma</p>";
    ?>
</body>
</html>