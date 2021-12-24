<?php
class GameOperation
{

    function diceRoll()
    {
        $RollDice = rand(1, 6);
        echo "Snake and Ladder game played with single player at start position 0" . "\n";
        echo "The Dice Roll is: " . $RollDice ."\n";
    }

    function playerCheck()
    {
        $PlayerCheck = rand(0,2);
        echo "player check: ". $PlayerCheck ."\n";

        /**
         * PlayerCheck=0 Then Player goes down by snake
         * PlayerCheck=1 Then Player Not play
         * PlayerCheck=2 Then Player Climb Ladder
         */
        switch ($PlayerCheck) {
            case 0:
                echo "SNAKE";
                break;
            case 1:
                echo "NO PLAY";
                break;
            case 2:
                echo "LADDER"."\n";
                $RollDice = rand(1, 6);
                echo "The Dice Roll is: " . $RollDice ."\n";
                break;
        }
    }
}

$game = new GameOperation();
$game->diceRoll();
$game->playerCheck();
