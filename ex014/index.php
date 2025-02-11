<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    
    <h2>Funções</h2>

    <?php 

    function saudacao(){
        echo "Olá, seja bem vindo ao PHP!";
    }

    saudacao(); //chamando a função

    echo "<br>";
    function somar($a, $b){
        return $a + $b;
    }

    $resultado = somar(5, 3); //chamando a função e passando os argumentos
    echo "Resultado da soma: " . $resultado; //Saida

    echo "<br>";

    $resultado1 = somar(8, -2);
    echo "Resultado da soma: " . $resultado1;

    echo "<br>";

    function saudacaoPersonalizado($nome = "Visitante"){
        echo "Olá $nome! Bem vindo ao PHP!";
    }

    saudacaoPersonalizado(); //Chamada sem argmentos, usa o valor padrão
    echo "<br>";
    saudacaoPersonalizado("Carlos"); //chamada com argumento
    
    ?>

</body>
</html>