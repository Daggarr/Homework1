<?php

class RollTwoDice{

    function getSum(){
        $this->sum = readline("Enter desired sum: ");

        if ($this->sum<2 OR $this->sum>12){
            echo "Invalid sum!";
            exit;
        }
    }

    function rollDice(){
        $this->currentSum = 0;
        while ($this->currentSum != $this->sum){
            $dice1=rand(1,6);
            $dice2=rand(1,6);

            $this->currentSum = $dice1+$dice2;

            echo "$dice1 and $dice2 = $this->currentSum \n";
        }
    }
}

$dices = new RollTwoDice;
$dices->getSum();
$dices->rollDice();