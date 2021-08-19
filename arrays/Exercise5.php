<?php

$board=[[" "," "," "],
        [" "," "," "],
        [" "," "," "]];

function display_board(Array $board)
{
    echo " {$board[0][0]} | {$board[0][1]} | {$board[0][2]} \n";
    echo "---+---+---\n";
    echo " {$board[1][0]} | {$board[1][1]} | {$board[1][2]} \n";
    echo "---+---+---\n";
    echo " {$board[2][0]} | {$board[2][1]} | {$board[2][2]} \n";
}

display_board($board);

$gameIsGoing = true;
$turn = 1;

while ($gameIsGoing){
    if ($turn%2==0){
        $locationO =explode(" ", readline("'O', choose your location (row, column): "));

        if ($board[$locationO[0]][$locationO[1]]=="X" OR $board[$locationO[0]][$locationO[1]]=="O"){
            echo "That slot is taken!\n";
            continue;
        }else{
            $board[$locationO[0]][$locationO[1]]="O";
        }

    }else{
        $locationX =explode(" ", readline("'X', choose your location (row, column): "));

        if ($board[$locationX[0]][$locationX[1]]=="X" OR $board[$locationX[0]][$locationX[1]]=="O"){
            echo "That slot is taken!\n";
            continue;
        }else {
            $board[$locationX[0]][$locationX[1]] = "X";
        }
    }
    display_board($board);

    for ($i=0;$i<3;$i++){
        if ($board[$i][0]=='X' AND $board[$i][1]=='X' AND $board[$i][2]=='X'){
            echo "The winner is 'X'!\n";
            exit;
        }elseif ($board[$i][0]=='O' AND $board[$i][1]=='O' AND $board[$i][2]=='O'){
            echo "The winner is 'O'!\n";
            exit;
        }
    }

    if ($board[0][0]=='X' AND $board[1][1]=='X' AND $board[2][2]=='X'){
        echo "The winner is 'X'!\n";
        exit;
    }elseif ($board[0][0]=='O' AND $board[1][1]=='O' AND $board[2][2]=='O'){
        echo "The winner is 'O'!\n";
        exit;
    }

    if ($board[0][2]=='X' AND $board[1][1]=='X' AND $board[2][0]=='X'){
        echo "The winner is 'X'!\n";
        exit;
    }elseif ($board[0][2]=='O' AND $board[1][1]=='O' AND $board[2][0]=='O'){
        echo "The winner is 'O'!\n";
        exit;
    }

    if ($turn==9){
        $gameIsGoing=false;
        echo "The game is a tie.\n";
    }

    $turn++;
}