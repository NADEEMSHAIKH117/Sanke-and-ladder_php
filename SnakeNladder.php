<?php
class GameOperation{

    public function diceRoll(){
        echo "Snake and Ladder game played with single player at start position 0";
    }
}

$game = new GameOperation();
$game->diceRoll();
?>