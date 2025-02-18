<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrutor e Destrutor</title>
</head>
<body>
    
    <h2>Contrutor e Destrutor</h2>

    <?php 
    
    class Produto{
        //atributo
        public $nome;
        public $preco;

        //Construtor: chamando quando o objeto e criado
        public function __construct($nome, $preco){
            $this->nome = $nome;
            $this->preco = $preco;
            echo "produto '$this->nome' criando com sucesso! <br>";
        }
    }

        //Criando um objeto
        $produto1 = new Produto("Camiseta", 39.90); //Cronstrutor chamado aqui
        $produto2 = new Produto("Tênis", 300.00); //Cronstrutor chamado aqui
    ?>

</body>
</html>