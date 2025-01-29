<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Variáveis</title>
</head>
<body>

    <h2>
     <?php 

     //variável do tipo string
     $sobrenome = "Lins";

     //variável do tipo int
     $idade = 23;

     //variável do tipo float
     $peso = 75.6;

     //variavel do tipo boolean (verdadeiro ou falso)
     $casada = false;

     echo "$sobrenome $idade $peso ";
     
     //Método 1: Usando var_dump para exibir ovalor booleanp
     var_dump($casada); //Exibe 'bool(false)'

     //Método 2: Usando uma conversão booleana para string
     echo ($casada ? "Casado" : "Não é casado") //Exibe 'Não é casado'
     

     ?>
    </h2>

</body>
</html>