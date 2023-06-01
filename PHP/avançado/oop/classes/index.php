<?php
    /* Orientação a objetos no php
    $variavel;
    func();
    Pessoa
    {
        nome
        idade
        peso


        andar()
        {
            echo "andando";
        }
        crescer(){
            echo "crescendo";
        }
        comer(){
            echo "comendo";
        }
    }
    */
    
    class Pessoa
    {
        //Objeto Pessoa
        private $nome;
        private $idade;
        private $peso;

        private function andar()
        {
            $this ->comer();
            echo "andando";
        }
        public function crescer()
        {
            echo "crescendo";
        }
        public function peso($peso){
            $this ->$peso = $peso;
            return $this ->peso;
        }
        private function comer()
        {
            echo "comendo";
        }
    }
?>

<?php
//instanciar
$BB = new Pessoa;
$BB2 = new Pessoa;
$BB ->crescer();
?>