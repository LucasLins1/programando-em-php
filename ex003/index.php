<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários e variável dentro da variável </title>
</head>
<body>

    <h2> Variável dentro da variável </h2>

    <?php

    //Para comentários de uma linha eu uso o barra e barra

    /*
    eu uso para comentar
    varias linha
    ao mesmo tempo 
    */
       
    $nome = "Lucas";
    $sobrenome = "Lins";

    //A variável abaixo rece uma interpolação
    $frase = "seu nome é $nome, seu sobrenome é $sobrenome";

    echo "$frase";

    ?>

</body>
</html>