<?php

class AsciiFigure{
    const numberOfLevels = 6;

    function drawFigure(){
        for ($i=0;$i<self::numberOfLevels;$i++){
            $middlePart=$i*8;
            $leftPart=((self::numberOfLevels-1)*8-$middlePart)/2;
            $rightPart=((self::numberOfLevels-1)*8-$middlePart)/2;
            echo str_repeat("/",$leftPart).str_repeat("*",$middlePart).str_repeat('\\', $rightPart)."\n";
        }
    }

}

$figure = new AsciiFigure;
$figure->drawFigure();