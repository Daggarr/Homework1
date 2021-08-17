<?php

$number = (int) readline("Enter a number: ");

if ($number<0){
    echo "Number is negative\n";
}elseif ($number>0){
    echo "Number is positive\n";
}else{
    echo "Number is zero\n";
}