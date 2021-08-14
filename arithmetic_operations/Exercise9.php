<?php
$weight =(float) readline('Enter your weight: ');
$height =(float) readline('Enter your height: ');

$weight = $weight / 0.45;
$height = $height / 2.54;

$bmi = $weight * 703 / $height ** 2;

switch ($bmi){
    case $bmi<18.5:
        echo "Your BMI is $bmi which is underweight\n";
        break;
    case $bmi>25:
        echo "Your BMI is $bmi which is overweight\n";
        break;
    default:
        echo "Your BMI is $bmi which is optimal weight\n";
}