<?php
$person = new stdClass();
$person->name='Oliver McTrevor';
$person->licenses=['HFL','SGL'];
$person->cash=400;

$mb= new stdClass();
$mb->license='HFL';
$mb->price=130;
$mb->name='MB4418-1';

$m4= new stdClass();
$m4->license='AKL';
$m4->price=230;
$m4->name='M4';

$glock= new stdClass();
$glock->license='HGL';
$glock->price=105;
$glock->name='Glock';

$guns=[$mb,$m4,$glock];

foreach ($guns as $key => $gun){
    echo "{$key}| {$gun->name} ({$gun->price}$)[{$gun->license}]\n";
}

$selection=(int) readline ('Enter selection: ');

if (!isset($guns[$selection])){
    echo "Invalid selection.";
    exit;
}

$selectedGun = $guns[$selection];

if (!in_array($selectedGun->license, $person->licenses) OR $person->cash < $selectedGun->price){
    echo "Person cannot purchase this weapon";
    exit;
};

echo "Person can purchase weapon";