<?php
$oliver = new stdClass();
$oliver->name='Olivers';
$oliver->surname='Lielgaums';
$oliver->age=17;

$ilze = new stdClass();
$ilze->name='Ilze';
$ilze->surname='Dzene';
$ilze->age=45;

$peteris = new stdClass();
$peteris->name='Peteris';
$peteris->surname='Auzins';
$peteris->age=32;

$persons = [$oliver,$ilze,$peteris];

foreach ($persons as $person){
    if ($person->age >18){
        echo "This person is over 18\n";
    }else{
        echo "This person is under 18\n";
    }
}