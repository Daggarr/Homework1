<?php

class FizzBuzz {
    function set_max(){
        $this->max = readline('Enter max value: ');
    }

    function printNumbers(){
        for ($i=1;$i<=$this->max;$i++) {
            switch ($i){
                case $i%3==0 AND $i%5==0:
                    echo "FizzBuzz ";
                    break;
                case $i%3==0:
                    echo "Fizz ";
                    break;
                case $i%5==0:
                    echo "Buzz ";
                    break;
                default:
                    echo "$i ";
            }

            if ($i%20==0){
                echo "\n";
            }
        }
    }

}

$Fizzbuzz = new FizzBuzz();
$Fizzbuzz->set_max();
$Fizzbuzz->printNumbers();