<?php
$numbers=[];

for ($i=0;$i<10;$i++){
    $numbers[]=rand(1,100);
}

$numbersCopy = $numbers;

$numbers[count($numbers)-1]=-7;

echo "Array 1: ";
foreach ($numbers as $number){
    echo $number." ";
}

echo "\n";

echo "Array 2: ";
foreach ($numbersCopy as $number){
    echo $number." ";
}