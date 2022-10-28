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

    $nota['Alexandra'] = 10;
    $nota['Felipe'] = 9.0;
    $nota['Gustavo'] = 8.5;

    // foreach -- para cada ...
    foreach ($nota as $posicao => $nota) {
        echo "<p>Aluno: $posicao</p>";
        echo "<p>Nota: $nota</p>";
        }

    // Outras formas de criar um vetor
    $nota = ['Aleaxandra' => 10, 'Felipe' => 9.0, 'Gustavo' => 8.5];
    $nota = array('Alexandra' => 10, 'Felipe' => 9.0, 'Gustavo' => 8.5);

    // Vetor a partir de um vetor
    $frutas = array('Maça', 'Laranja', 'Pera', 'Caqui');
    $verduras = ['Alface', 'Couve', 'Alcega'];
    $alimentos = array($frutas, $verduras);

    // acessando índices
    echo $alimentos[0][2];
    echo $alimentos[1][1];
    
    // percorrendo frutas em alimentos com o foreach
    foreach ($frutas as $vetor => $fruta) {
        echo $fruta;
    }

    // // estrutura foreach ***
    // foreach($nomeArray as $var1 => $var2)
    //     echo $var2;

    // percorrendo verduras em alimentos com o foreach
    foreach ($verduras as $alimento => $verdura) {
        echo $verdura;
    }

    // extraindo os elementos de $alimentos
    foreach ($alimentos as $lista) {

        foreach ($lista as $vetor){
            echo $vetor;
        }

    }
    // testes
    echo $frutas[0];
    echo $verduras[0];
    echo $alimentos[0][1];

    // manipulando vetor com foreach
    $brics = ['Brasil', 'Rússia', 'Índia', 'China', 'África do Sul'];

    foreach ($brics as $paises => $lista){
        echo $lista;
    }
    ?>
</body>
</html>

