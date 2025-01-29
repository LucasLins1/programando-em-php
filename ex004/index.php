<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>

    <h1>Operadores Aritméticos</h1>

    <?php

    $soma = 20 + 20;
    $subtração = 10 - 5;
    $dividão = 5 / 2;
    $resto = 5 % 2;
    $multiplicação = 5 * 3;
    $potenciação = 2 ** 3;

    echo "Resultado da soma é $soma <br>";
    echo "Resultado da subtração é $subtração <br>";
    echo "Resultado da divisão é $dividão <br>";
    echo "O resto da divisão é $resto <br>";
    echo "Resultado da multiplicação é $multiplicação <br>";
    echo "Resultado da potenciação é $potenciação <br>";

    /* Ordem de grandeza
    Primeiro = () parênteses
    fora dos parênteses segue a linha abaixo
    Segundo = potenciação
    Terceiro = multiplicação
    QUarto = divisão
    Quinto = soma
    Sexto = subtração
    */

    //Primeira expressão: (3 + 2) * 4
    $valor1 = (3 + 2) * 4;
    
    //Segunsa expressão: (2 * (2 + (2 - 1))) + 8 * 2
    $valor2 = (2 * (2 + (2 - 1))) + 8 * 2;

    //Exibindo os resultados - concatonação
    echo "Resultado da primeira expressão: " . $valor1 . "<br>";
    echo "Resultado da segunda expressão: " . $valor2 . "<br>";

    ?>

</body>
</html>