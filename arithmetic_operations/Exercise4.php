<?php
$sum = 1;
$number =(int) readline('Enter a number: ');

for ($i=1;$i<=$number;$i++){
    $sum= $sum * $i;
}

echo "The factorial of $number is $sum\n";
