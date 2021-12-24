<?php
class GameOperation{

     function diceRoll(){
        $RollDice= rand(1,6);
        echo "Snake and Ladder game played with single player at start position 0" ."\n";
        echo "The Dice Roll is: ".$RollDice;

    }
}

$game = new GameOperation();
$game->diceRoll();
?>