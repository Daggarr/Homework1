<?php

$number = (int) readline("Enter number to multiply: ");
$times = (int) readline("Enter how many times to multiply: ");
$sum = $number;

for ($i = 1; $i <$times+1; $i++ ){
    $sum = $sum * $number;
}

echo "$sum\n";