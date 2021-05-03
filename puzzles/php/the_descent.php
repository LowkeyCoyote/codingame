<?php


while (TRUE)
{
    $maxHeight = 0;
    $maxIndice = 0;

    for ($i = 0; $i < 8; $i++){

        fscanf(STDIN, "%d", $mountainH);

        if($mountainH > $maxHeight){

            $maxHeight = $mountainH;
            $maxIndice = $i;

        }
    }

    echo("$maxIndice\n");
}

