<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Revisão Foreach</h1>

    <p>Parte 1: exibir os dados do vetor abaixo
         como uma tabela HTML</p>
   
    <?php

        $aluno[0]["nome"] = "João";
        $aluno[0]["nota1"] = 5.0;
        $aluno[0]["nota2"] = 6.0;
        $aluno[0]["sexo"] = "M";
        $aluno[0]["frequencia"] = 0.80;

        $aluno[1]["nome"] = "Maria";
        $aluno[1]["nota1"] = 7.0;
        $aluno[1]["nota2"] = 8.5;
        $aluno[1]["sexo"] = "F";
        $aluno[1]["frequencia"] = 0.9;

        $aluno[2]["nome"] = "Rita";
        $aluno[2]["nota1"] = 6.0;
        $aluno[2]["nota2"] = 7.0;
        $aluno[2]["sexo"] = "F";
        $aluno[2]["frequencia"] = 0.60;

        $aluno[3]["nome"] = "Manuel";
        $aluno[3]["nota1"] = 8.0;
        $aluno[3]["nota2"] = 6.0;
        $aluno[3]["sexo"] = "M";
        $aluno[3]["frequencia"] = 1.00;
    
        // foreach ($aluno as $vetor) {
        //     print_r($vetor); // função auxiliar que exibe os vetores e valores
        //     echo '<hr>'; // quebra de linha
        // }

        // criando tabela
        echo "<table border =\"1\">"; // o parêntese nas aspas corrigiu o erro
        echo "<tr> <th>Nome</th> <th>Nota 1</th> <th>Nota 2</th> <th>Sexo</th> <th>Frequência</th>"; // títulos das colunas
        foreach ($aluno as $al) { // para cada item na variável $alunos, coloque o índice na variável $al
            echo "<tr>"; 
            foreach ($al as $v) { // para cada iem na variável $al, coloque o índice na variável $v
                echo "<td>$v</td>";
            }
            echo '<tr>';
        }
        echo "</table>"
    ?>
</body>
</html>