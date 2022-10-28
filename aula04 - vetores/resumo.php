<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $media = 6;
        // IF TRADICIONAL
        if ($media >= 6) {
            $stiuacao = "Aprovado";
        }
        else {
            $situacao = "Reprovado";
        }
        // IF ABREVIADO 
        $situacao = ($media >= 6) ? "Aprovado" : "Reprovado";

    ?>

    <p>$a++ = $a + 1</p>
    <p>$a-- = $a - 1</p>

    <p>++$a = +1 + $a</p>
    <p>--$a = -1 + $a</p>

    <p>$a *= 10 --> $a = $a * 10</p>
    <p>$a /= 10 --> $a = $a / 10</p>

    <?php
        // TESTE
        $a = 100;
        $a /= 10;
        echo $a;
    ?>
</body>
</html>