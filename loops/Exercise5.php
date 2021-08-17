<?php
echo "Welcome to Piglet!\n";
$points = 0;
while (true){
    $randNumber = rand(1,6);

    echo "You rolled a $randNumber!\n";

    if ($randNumber == 1){
        echo "You got 0 points.\n";
        break;
    }else{
        $points=$points + $randNumber;
    }

    $ask= readline("Roll again?(y/n) ");
    if ($ask == "n"){
        echo "You got $points points.\n";
        break;
    }
}