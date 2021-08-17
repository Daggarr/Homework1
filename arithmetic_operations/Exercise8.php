<?php

function salaryCalc (float $basePay, int $hours): string
{
    if ($basePay<8.00){
        return "Base pay is too low!\n";
    }

    if ($hours>60){
        return "Too many worked hours!\n";
    }

    if ($hours>40){
        $overtime=($hours-40) * $basePay * 1.5;
        $salary=40*$basePay+$overtime;
    }else{
        $salary=$hours*$basePay;
    }



    return $salary."$\n";
}

echo salaryCalc(7.50,35);
echo salaryCalc(8.20,47);
echo salaryCalc(10.00,73);
