<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While e Do While</title>
</head>
<body>
    
   <?php 
    
    echo "<h2>While</h2>";

    //while
    $i = 1;
    while ($i <=5 ){   
        echo $i . "<br>"; //imprime o valor de $1
        $i++; //i+1
    }

    echo "<br><br>";
    //mostrar somente numeros pares
    $f = 2;
    while($f <= 10){
        echo $f . "<br>";
        $f += 2; //incrementa de 2 em 2
    }
    
    echo "<br>"; 

    echo "<h2>Do While</h2>";

    //Do While
    $g = 1;
    do{
        echo $g . "<br>";
        $g++;
    } while ($g <= 7);
    
    ?>

</body>
</html>