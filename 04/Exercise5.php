<?php

$persons = [
    [
        'name'=>'Anete',
        'surname'=>'Berzina',
        'age'=>46,
        'birthday'=>12.06
    ],
    [
        'name'=>'Andris',
        'surname'=>'Dzenis',
        'age'=>20,
        'birthday'=>02.10
    ],
    [
        'name'=>'Linda',
        'surname'=>'Lejina',
        'age'=>30,
        'birthday'=>03.07
    ],
];

for ($i=0;$i<count($persons);$i++){
    echo $persons[$i]['name'].' '.$persons[$i]['surname'].' '.$persons[$i]['age'].' '.$persons[$i]['birthday']."\n";
}