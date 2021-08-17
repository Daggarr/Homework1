<?php
$string = strtolower(readline("Enter a string: "));
$characters = str_split($string);

for ($i=0;$i<strlen($string);$i++){
    switch ($characters[$i]){
        case "a":
        case "b":
        case "c":
            echo "2";
            break;
        case "d":
        case "e":
        case "f":
            echo "3";
            break;
        case "g":
        case "h":
        case "i":
            echo "4";
            break;
        case "j":
        case "l":
        case "k":
            echo "5";
            break;
        case "m":
        case "n":
        case "o":
            echo "6";
            break;
        case "p":
        case "q":
        case "r":
        case "s":
            echo "7";
            break;
        case "t":
        case "u":
        case "v":
            echo "8";
            break;
        case "w":
        case "x":
        case "y":
        case "z":
            echo "9";
            break;
    }
}

echo "\n";
