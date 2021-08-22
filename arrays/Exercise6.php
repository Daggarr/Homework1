<?php

$wordlist = ["queen",
            "marriage",
            "historian",
            "championship",
            "imagination"];

$wordToGuess = $wordlist[rand(1,count($wordlist)-1)];

$wordIsNotGuessed= true;

$wordToGuessArray = str_split($wordToGuess);

$guessedWord = $wordToGuessArray;

$misses = "";

foreach ($guessedWord as &$letter){
    $letter = '_';
}

while ($wordIsNotGuessed){

    echo "Word: ";
    foreach ($guessedWord as $character){
        echo $character." ";
    }
    echo "\n";

    echo "Misses: ".$misses."\n";

    $guess = readline("Guess: ");

    if (strlen($guess)>1){
        echo "Guess must be one letter!\n";
        continue;
    }

    if (in_array($guess,$wordToGuessArray)==false){
        $misses=$misses.$guess;
    }

    while (in_array($guess,$wordToGuessArray)){
        $guessedWord[array_search($guess,$wordToGuessArray)]=$guess;
        $wordToGuessArray[array_search($guess,$wordToGuessArray)]="_";
    }

    if (in_array("_",$guessedWord)==false){
        echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-\n";
        echo "Word: ";
        foreach ($guessedWord as $character){
            echo $character." ";
        }
        echo "\n";

        echo "Misses: ".$misses."\n";

        echo "YOU GOT IT!\n";

        $answer = readline("Play 'again' or 'quit?' ");
        if ($answer=='again'){
            $wordToGuess = $wordlist[rand(1,count($wordlist)-1)];
            $wordToGuessArray=str_split($wordToGuess);
            $guessedWord = $wordToGuessArray;

            foreach ($guessedWord as &$letter){
                $letter = '_';
            }
        }else{
            exit;
        }
    }

    if (strlen($misses)==4){
        echo "You didn't guess the word and ran out of tries.\n";

        $answer = readline("Play 'again' or 'quit?'");
        if ($answer=='again'){
            $wordToGuess = $wordlist[rand(1,count($wordlist)-1)];
            $wordToGuessArray=str_split($wordToGuess);
            $guessedWord = $wordToGuessArray;

            foreach ($guessedWord as &$letter){
                $letter = '_';
            }
        }else{
            exit;
        }
    }
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-\n";
}
