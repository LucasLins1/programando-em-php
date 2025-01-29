<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro código</title>
</head>
<body>

 <h2>
 <?php 

     echo "Saudação Tricolor";
 
 ?>
 </h2>
 
 <?php

         //Declarando uma variável
     $nome = "Lucas";
     $sobrenome = "Lins";

         //A variável pode ser mudada
     $nome = "Lucas F.";

         //Qubra de linha antes do próximo echo
         //echo "<br> <br>";

         //Declarando uma constane
     const time = "São Paulo";

     echo "Seja bem-vindo, $nome $sobrenome, meu time de futebol é " . time;
     print " 🔴⚪⚫ ";

 ?>

</body>
</html>