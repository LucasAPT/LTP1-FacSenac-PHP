<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetor</title>
</head>
<body>  
    <h1>Vetor</h1>

    <?php
        $nome = ['Lucas', 'Emanuelly', 'Sophia', 'Matheus'];
        $idade = ['24', '16', '14', '8'];
        // echo $nome; // ERRO ARRAY PARA STRING

        // COMO EXIBIR O VETOR EM UMA TABELA HTML USANDO LAÇO DE REPETIÇÃO
        echo '<table border="1>';
        
        $linha1 = '<tr><th>Nome</th>';
        $linha2 = '<tr><th>Idade</th>';

        for ($i = 0; $i < 4; $i++) {
            $linha1 .= "<td>$nome[$i]</td>";
            $linha2 .= "<td>$idade[$i]</td>";
        }

        $linha1 .= "</tr>";
        $linha2 .= "</tr>";    

        echo '<table border="1>';
        echo $linha1;
        echo $linha2;

        echo '</table>';
    ?>
    
</body>
</html>