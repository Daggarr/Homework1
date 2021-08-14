<?php

function over10 (Array $fruit): bool
{
    if ($fruit > 10){
        return true;
    }else{
        return false;
    }
}

$fruits = [[
   'bananas' => 40,
   'apples' => 5,
   'plums' => 14,
   'kiwi' => 9
],[2,1]];

foreach ($fruits[0] as $fruit){
    $weight = over10($fruit);
    if ($weight == true){
        echo "The fruits weight is $fruit and shipping cost is ".$fruits[1][0]."\n";
    }else{
        echo "The fruits weight is $fruit and shipping cost is ".$fruits[1][1]."\n";
    }
}