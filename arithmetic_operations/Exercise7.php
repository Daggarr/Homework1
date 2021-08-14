<?php
$acceleration = (float) readline('Enter acceleration: ');
$time = (float) readline('Enter time: ');
$initialVel = (float) readline('Enter initial velocity: ');
$initialPos = (float) readline('Enter initial position: ');

$accOverTime = $time ** 2 * $acceleration * 0.5;
$distOverTime = $initialVel * $time;

$distance = $accOverTime + $distOverTime + $initialPos;

echo "$distance\n";