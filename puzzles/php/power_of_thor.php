<?php

fscanf(STDIN, "%d %d %d %d", $lightX, $lightY, $initialTx, $initialTy);

$thorPositionX = $initialTx;
$thorPositionY = $initialTy;

while (TRUE)
{
    $directionX = "";
    $directionY=  "";

    fscanf(STDIN, "%d", $remainingTurns);

    if($thorPositionX > $lightX){
        $directionX = "W";
        $thorPositionX--;
    }
    elseif($thorPositionX < $lightX){
        $directionX = "E";
        $thorPositionX++;
    }

    if($thorPositionY > $lightY){
        $directionY = "N";
        $thorPositionY--;
    }
    elseif($thorPositionY < $lightY){
        $directionY = "S";
        $thorPositionY++;
    }

    echo("$directionY$directionX\n");
}
?>
