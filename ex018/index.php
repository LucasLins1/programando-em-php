<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificadores de acesso</title>
</head>
<body>
    
    <h2>Modificadores de acesso</h2>

    <?php 
    
    class Funcionario{
        //Propriedades com diferentes modificadores de acesso
        public $nome; //Pode ser acessado de qualquer lugar
        protected $salario; //Pode ser acessado apenas dentro da superclasse e subclasse
        private $cpf; //Pode ser acessado apenas dentro da classe

        //Construtor para inicializar os valores
        public function __construct($nome, $salario, $cpf){
            $this->nome = $nome;
            $this->salario = $salario;
            $this->cpf = $cpf;
        }

        //Metodo publico para exibir o nome do funcionario
        public function exibirNome(){
            echo "Nome: " .  $this->nome . "<br>";
        }

        //Metodo protegido para exibir o salario (somente para subclasses ou na propria classe)
        protected function exibirSalario(){
            echo "Salario: R$ " .  $this->salario . "<br>";
        }

        //Metedo privado para exibir o cpf (somente dentro da classes)
        private function exibirCpf(){
            echo "CPF: " .  $this->cpf . "<br>";
        }

        //Metodo publico para chamr o metodo privado e protegido na propria classe
        public function exibirDetalhes(){
            $this->exibirNome();
            $this->exibirSalario();
            $this->exibirCpf();
        }
    }

    //Criando uma instancia da classe funcionario
    $funcionario1 = new Funcionario("Carlos Silva", 7000, "123.456.789-00");

    //Acessando o nome diretamente (publico)
    $funcionario1->exibirNome();

    //Acessando o salario diretamente (proteido)
    //$funcionario1->exibirSalario(); //comentado porque gera erro

    //Acessando o CPF diretamente (privado)
    //$funcionario1->exibirCpf(); //Comentado porque gera erro

    //Chamando o método público que acesso todos os dados
    $funcionario1->exibirDetalhes();

    ?>

</body>
</html>