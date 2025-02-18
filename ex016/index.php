<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e objetos</title>
</head>
<body>
    
    <h2>Classes e objetos</h2>

    <?php 

    class Carro {
        //Propriedades ou atributos
        public $marca;
        public $modelo;
        public $ano;

        //Método (Função dentro da classe)
        public function exibirDetalhe() {
            echo "Marca: " . $this->marca . "<br>";
            echo "Modelo: " . $this->modelo . "<br>";
            echo "Ano: " . $this->ano . "<br>";
        }
    }
    
    //Instância
    $meuCarro = new Carro();
    $meuCarro->marca = "Toyota";
    $meuCarro->modelo = "Corolla";
    $meuCarro->ano = 2023;

    $meuCarro->exibirDetalhe(); //Exibir os detalhes do carro

    echo "<br>";

    //Nova classe
    class Pessoa{
        //Propriedades ou atributos
        public $nome;
        public $idade;
        
        //metodo
        public function saudacao(){
            echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos. <br>";
        }
    }

    $joao = new Pessoa();
    $joao->nome = "João";
    $joao->idade = 30;

    $joao->saudacao(); //exibe a saucação com os daddos do joão

    ?>

</body>
</html>