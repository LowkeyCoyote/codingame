<?php


fscanf(STDIN, "%d", $surfaceN);
for ($i = 0; $i < $surfaceN; $i++)
{

    fscanf(STDIN, "%d %d", $landX, $landY);
}

while (TRUE)
{

    fscanf(STDIN, "%d %d %d %d %d %d %d", $X, $Y, $hSpeed, $vSpeed, $fuel, $rotate, $power);

    if($vSpeed <= -40){
        $power = 4;
    }

    echo("0 ".$power."\n");

}

