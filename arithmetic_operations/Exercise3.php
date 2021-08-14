<?php
/*
 Write a program to produce the sum of 1, 2, 3, ..., to 100.
 Store 1 and 100 in variables lower bound and upper bound,
 so that we can change their values easily.
 Also compute and display the average.
 The output shall look like:
 */
$inbetween=0;
$sum = 0;
$lowerBound =(int) readline('Enter lower bound: ');
$upperBound =(int) readline('Enter upper bound: ');

if ($upperBound<$lowerBound){
    $temporary=$lowerBound;
    $lowerBound=$upperBound;
    $upperBound=$temporary;
}

for ($i=$lowerBound;$i<=$upperBound;$i++){
    $sum= $sum + $i;
    $inbetween++;
}

$average = $sum/$inbetween;

echo "The sum of $lowerBound to $upperBound is $sum\n";
echo "The average is $average";