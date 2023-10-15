<?php
    $number1 = $_GET["n1"];
    $number2 = $_GET["n2"];
    $operation = $_GET["op"];
    
    if ($operation == 'suma') {
        $operation = new operation();
        $sum = $operation->suma();
    }

    class operation{

        public function suma(){
            $totalsum = $this->number1 + $this->number2;
            echo 'Resultado de la Suma = ' . $totalsum;
        }
// si pere, yo lo corrijo
        public function resta(){
            $totalres = $this->number1 - $this->number2;
            echo 'Resultado de la Suma = ' . $totalres;
            
        }

        public function multiplicacion(){
            $totalmul = $this->number1 * $this->number2;
            echo 'Resultado de la Suma = ' . $totalmul;
        }

        public function division(){
            $totaldiv = $this->number1 / $this->number2;
            echo 'Resultado de la Suma = ' . $totaldiv;
        }
    }
    

?>