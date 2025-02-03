<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional IF, Else e Elseif</title>
</head>
<body>

    <h2>Condicional IF, Else e Elseif</h2>

    <?php 
    
    //condicional if
    if(1< 2){
        echo "O número 1 é menor <br>";
    }
    
    $idade = 18;
    if($idade >= 18){
        echo "Voce é maior de idade.";
    }
    
    echo "<br>";
    echo "<br>";

    //condicional Else
    $a = 10;
    $b = 14;

    if($a == $b){
        echo "As variáveis são iguais.";  //se
    } else {
        echo "As variáveis são diferentes.";  //se não
    }

    echo "<br>";
    echo "<br>";

    //condicional Elseif
    $idadepessoa = 25;

    if($idadepessoa < 13){
        echo "Você é uma criança.";
    } else if($idadepessoa >= 13 && $idadepessoa <= 19) {
        echo "Você é uma adolescente.";
    } else if($idadepessoa >= 20 && $idadepessoa <= 59) {
        echo "Você é um adulto.";
    } else {
        echo "Você é um idoso.";
    }

    ?>
    
</body>
</html>