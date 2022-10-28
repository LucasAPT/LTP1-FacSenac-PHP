<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota_Alunos</title>
</head>
<body>
    <h1>Situação do aluno</h1>
    <?php
        $nome = $_GET["nome"];
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $frequencia = $_GET["frequencia"];
        
        $media = ($nota1 + $nota2) / 2;

        if ($frequencia < 75) {
            echo "<p>Nome: $nome</p>";
            echo "<p>Média: $media</p>";
            echo "<p>Frequência: $frequencia</p>";

            echo "<p>Situação: Reprovado por faltas.</p>";
        }

        elseif ($frequencia >= 75 && $media < 2) {
            echo "<p>Nome: $nome</p>";
            echo "<p>Média: $media</p>";
            echo "<p>Frequência: $frequencia</p>";

            echo "<p>Situação: Reprovado.</p>";
        }
        
        elseif ($frequencia >= 75 && $media < 6) {
            echo "<p>Nome: $nome</p>";
            echo "<p>Média: $media</p>";
            echo "<p>Frequência: $frequencia</p>";

            echo "<p>Situação: Exame final.</p>";
        }

        elseif ($frequencia >= 75 && $media >= 6) {
            echo "<p>Nome: $nome</p>";
            echo "<p>Média: $media</p>";
            echo "<p>Frequência: $frequencia</p>";

            echo "<p>Situação: Aprovado.</p>";
        }

    ?>
</body>
</html>
