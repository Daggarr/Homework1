<?php

$number = 67;

switch ($number){
    case $number<50:
        echo 'low';
        break;
    case $number>50 AND $number<100:
        echo 'medium';
        break;
    case $number>100:
        echo 'high';
        break;
}