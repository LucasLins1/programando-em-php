<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
    
    <h2>Polimorfismo</h2>

    <?php 
    
    //Super classe
    class Animal{
        public function fazersom(){
            return "O animal faz um som.";
        }
    }

    //Subclasse
    class Cachorro extends Animal{
       public function fazersom(){
        return "Au au au au.";
       }
    }

    //Outra subclasse
    class Gato extends Animal{
        public function fazerSom(){
            return "Miaaaaaaaaaau";
        }
    }
    
    //Função que utiliza polimorfismo
    function emitirSomAnimal(Animal $animal){
        echo $animal->fazerSom() . "<br>";
    }

    //Criar objetos - intancias
    $cachorro1 = new Cachorro();
    $gato1 = new Gato();
    echo $cachorro1->fazersom();
    echo "<br>";
    echo $gato1->fazersom();

    echo "<br> <br>";

    //Chamando a função com diferente objetos, mas com a mesma assinatura
    emitirSomAnimal($cachorro1);
    emitirSomAnimal($gato1);
    
    ?>

</body>
</html>