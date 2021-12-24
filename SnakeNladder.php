<?php
class GameOperation
{
    private $startPosition;
    private $previousPosition;
    private $count;
    private $diceNumber;

    public function __construct()
    {
        $this->startPosition = 0;
        $this->count = 0;
    }


    public function diceRoll()
    {
        $this->previousPosition = $this->startPosition;
        $this->diceNumber = rand(1, 6);
        $this->count++;
        $this->playerCheck();
    }

    function playerCheck()
    {
        $PlayerCheck = rand(1, 3);
        $this->nextMove($PlayerCheck);
    }

    public function nextMove($PlayerCheck)
    {

        /**
         * PlayerCheck=3 Then Player goes down by snake
         * PlayerCheck=1 Then Player Not play
         * PlayerCheck=2 Then Player Climb Ladder
         */
        switch ($PlayerCheck) {
            case 1:
                // No play
                echo "No Play " . $this->startPosition . " location\n";
                break;
            case 2:
                // Ladder
                $this->startPosition += $this->diceNumber;
                echo "Next position " . $this->startPosition . "\n";
                break;
            case 3:
                // Snake
                $this->startPosition -= $this->diceNumber;
                if ($this->startPosition <= 0) {
                    $this->startPosition = 0;
                }
                echo "Position " . $this->startPosition . "\n";
                break;
        }

        if ($this->startPosition != 100) {
            $this->diceRoll();
        } else {
            echo "Player won \n";
        }
    }
}
$game = new GameOperation();
$game->diceRoll();
