<?php

$numberCount=(int) readline("Enter number count: ");

echo "The first $numberCount natural numbers are: \n";

for ($i=1;$i<$numberCount+1;$i++){
    echo $i." ";
}