<?php
$firstWord = readline('Enter first word: ');
$secondWord = readline('Enter second word: ');

$numberOfDots =30 - (strlen($firstWord)+strlen($secondWord));

if ($numberOfDots>0){
    echo $firstWord;

    for ($i=0;$i<$numberOfDots;$i++){
        echo ".";
    }

    echo "$secondWord\n";
}else{
    echo $firstWord;
    echo $secondWord."\n";
}
