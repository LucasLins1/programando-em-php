<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    
    <?php 
    
    //criação de array indexado
    $array = [10, 20, 30, 40];

    //exibindo o array
    echo "Array original: ";
    print_r($array);  //print_r() exibe o array de forma legivel
    
    echo "<br> <br>";

    //adicionando um valor ao final array
    $array[] = 50;

    //exibindo array atualizado
    echo "Array após adicionar 50: ";
    print_r($array);

    echo "<br> <br>";

    //Alterando o valor na posiçao 1 para 25
    $array[1] = 25;

    echo "Array após alterar o valor na posição 1 para 25: ";
    print_r($array);

    echo "<br> <br>";

    //Removendo o valor no índice 2
    unset($array[2]);

    echo "Array após remover o valor no índice 2: ";
    print_r($array);

    echo "<br> <br>";
    
    //Reorganizando os indices do array
    $array = array_values($array);

    //Exibir o array após remover o indice e reorganizar
    echo "Array após reorganizar os elementos: ";
    print_r($array);
    
    echo "<br> <br>";

    $array [] = 19;

    //Ordenando o array de forma crescente
    sort($array);

    //Exibindo o array ordenado
    echo "Array apos ordenar os valores: ";
    print_r($array);

    ?>

</body>
</html>