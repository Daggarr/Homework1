<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];


echo "Original numeric array: \n";
foreach ($numbers as $number){
    echo $number." ";
}
echo "\n";

sort($numbers);

echo "Sorted numeric array: \n";
foreach ($numbers as $number){
    echo $number." ";
}
echo "\n";

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

echo "Original string array: \n";
foreach ($words as $word){
    echo $word." ";
}
echo "\n";

sort($words);

echo "Sorted string array: \n";
foreach ($words as $word){
    echo $word." ";
}
echo "\n";