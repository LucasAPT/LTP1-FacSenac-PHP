<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de notas</title>
</head>
<body>
    <p>PROGRAMA QUE RECEBE NOME, FREQUÊNCIA, NOTA DO 1º E 2º BIMESTRE E RETORNA A SITUAÇÃO DO ALUNO</p>
    <p>MÉDIA PARA APROVAÇÃO = 6</p>
    <p>FREQUÊNCIA MÍNIMA = 75</p>
    
    <form action="receveid.php" method="GET">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>

        <label for="nome">Nota do 1º bimestre:</label>
        <input type="text" name="nota1" id="nota1">
        <br>

        <label for="nome">Nota do 2º bimestre:</label>
        <input type="text" name="nota2" id="nota2">
        <br>

        <label for="nome">Frequência:</label>
        <input type="text" name="frequencia" id="frequencia">
        <br>
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>