<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laço for e foreach</title>
</head>
<body>
    
    <h2>laço for e foreach</h2>

    <?php 
    //for
    for ($i = 1; $i <= 5; $i++){
        echo $i. "<br>"; //imprime o valor de $i e pula para a próxima linha
    }

    echo "<br>";

    for ($a = 1; $a <=5; $a++){
        echo "O quadrado de $a é ". ($a * $a) . "<br>";
    }

    echo "<h2><br>Foreach<br></h2>";

    $frutas = ["Maça", "Banana", "Laranja", "Uva"];

    foreach($frutas as $fruta){
        echo $fruta . "<br>"; //Imprime o nome de cada fruta
    }

    echo "<br>";
    $idades = [
        "João" => 25,
        "Maria" => 30,
        "Pedro" => 22
    ];

    foreach($idades as $nome => $idade){
        echo "$nome tem $idade anos. <br>"; //exibe nome e idade
    }
    
    ?>

</body>
</html>