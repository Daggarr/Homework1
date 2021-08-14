<?php

$number1 = (int) readline('Enter first number: ');
$number2 = (int) readline('Enter second number: ');

function integerCheck(int $number1, int $number2):bool{
    if ($number1 == 15 OR $number2 == 15 OR $number1+$number2 == 15 OR abs($number1-$number2) == 15) {
        return true;
    }
}

echo integerCheck($number1,$number2);