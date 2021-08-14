<?php
function doubleInteger($number):int{
    if (is_int($number)){
        return $number * $number;
    }
}

$array = [5,34,8,1.04,'hello'];

for ($i=0; $i<count($array); $i++){
    echo doubleInteger($array[$i])."\n";
}