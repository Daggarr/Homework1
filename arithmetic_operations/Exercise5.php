<?php
$number = rand(1,100);
$guess = (int) readline("I'm thinking of a number between 1-100.  Try to guess it. ");

switch ($guess){
    case $guess<$number:
        echo "Sorry, you are too low.  I was thinking of $number.\n";
        break;
    case $guess>$number:
        echo "Sorry, you are too high.  I was thinking of $number.\n";
        break;
    case $guess=$number:
        echo "You guessed it!  What are the odds?!?\n";
}
