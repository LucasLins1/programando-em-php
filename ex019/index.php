<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    
<h2>Herança e Polimorfismo</h2>

<?php 

//Classe base (superclasse)
class Animal{
    //Propriedades ou atributo
    public $nome;

    //Método
    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function falar(){
        return "O animal faz um som.";
    }
}

//Subclasse que herda de Animal
class Cachorro extends Animal{

    //Sobrescrevendo o metodo falar
    public function falar(){
        return "O cachorro late.";
    }
}

//Criando um ogjeto da classe cachorro
$cachorro = new Cachorro("Rex");
echo $cachorro->nome;

echo "<br>";

//Chamando metodo subescrito da subclasse
echo $cachorro->falar();

echo "<br>";

//mostrando metodo falar da superclasse
$animal = new Animal("animal");
echo $animal->falar();

?>

</body>
</html>