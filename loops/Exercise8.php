<?php

class NumberSquare{

    function GetMinMax(){
        $this->min= readline("Min? ");
        $this->max= readline("Max? ");
    }

    function writeSquare(){
        for ($i=$this->min;$i<=$this->max;$i++){
            $currentNumber = $this->min;
            for ($k=$i;$k<($this->max-$this->min+1+$i);$k++){
                if ($k<=$this->max){
                    echo "$k";
                }else{
                    echo "$currentNumber";
                    $currentNumber=$currentNumber+1;
                }

            }
            echo "\n";
        }
    }
}

$numberSquare = new NumberSquare;
$numberSquare->GetMinMax();
$numberSquare->writeSquare();