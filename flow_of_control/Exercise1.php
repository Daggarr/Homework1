<?php
$number1 = (int) readline("Enter 1st number: ");
$number2 = (int) readline("Enter 2nd number: ");
$number3 = (int) readline("Enter 3rd number: ");

$numbers = [$number1, $number2, $number3];

echo max($numbers)."\n";