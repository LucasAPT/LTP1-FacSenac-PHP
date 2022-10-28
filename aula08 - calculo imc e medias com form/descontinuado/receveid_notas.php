<h1>Situação do aluno</h1>
    <?php
        $nome = $_GET["nome"];
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        
        $media = ($nota1 + $nota2) / 2;

        if ($media < 4) {
            echo "<p>Nome: $nome</p>";
            echo "<p>Média: $media</p>";

            echo "<p>Situação: Reprovado.</p>";
        }
        
        elseif ($media < 6) {
            echo "<p>Nome: $nome</p>";
            echo "<p>Média: $media</p>";

            echo "<p>Situação: Exame final.</p>";
        }

        elseif ($media >= 6) {
            echo "<p>Nome: $nome</p>";
            echo "<p>Média: $media</p>";

            echo "<p>Situação: Aprovado.</p>";
        }

    ?>