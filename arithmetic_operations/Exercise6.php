<?php

for ($i=1;$i<=110;$i++){
    switch ($i){
        case $i%5==0 AND $i%3==0 AND $i%7==0:
            echo "CozaLozaWoza ";
            break;
        case $i%3==0 AND $i%5==0:
            echo "CozaLoza ";
            break;
        case $i%3==0 AND $i%7==0:
            echo "CozaWoza ";
            break;
        case $i%5==0 AND $i%7==0:
            echo "LozaWoza ";
            break;
        case $i%3==0:
            echo "Coza ";
            break;
        case $i%5==0:
            echo "Loza ";
            break;
        case $i%7==0:
            echo "Woza ";
            break;
        default:
            echo "$i ";
    }

    if ($i%11==0){
        echo "\n";
    }
}