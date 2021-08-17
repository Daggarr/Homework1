<?php

$number =(int) readline("Enter a positive number: ");

if ($number<1){
    echo "Invalid number!";
    exit;
}

$number=(string) $number;

echo "Number of digits is ".strlen($number);