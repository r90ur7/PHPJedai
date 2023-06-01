<?php
//mudar senha
    interface Interface1{
        public function print();
    }
?>
<?php
    class Teste implements interface1{
        public function print(){
            echo "print";
        }
    }

    $teste = new Teste;
    $teste ->print();
?>