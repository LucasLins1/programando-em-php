<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>

    <h2>Operadores de Atribuição</h2>

    <?php 

    //string
    $rua = "Rua Amador bueno";
    //Atribuição com concatenação
    $rua .= " na Cidade de São Paulo";

    //float
    $preço = 2.45;
    //Atribuição de soma
    $preço += 2.30;
    //Atribuição de subtração
    $preço -= 1.30;

    //Formata o numero para usar vírgula
    $preço_formatado = number_format($preço, 2,  ',',  '.');

    //Exibe o resultado 
    echo "$rua, <br> Preço R$ $preço_formatado"; 

    ?>

</body>
</html>