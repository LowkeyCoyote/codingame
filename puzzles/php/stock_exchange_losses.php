<?php

fscanf(STDIN, "%d", $n);
$inputs = explode(" ", fgets(STDIN));

$maxLoss = 0;
$MaxValue = 0;

for ($i = 0; $i < $n; $i++)
{
    $thisValue = intval($inputs[$i]);

    $MaxValue = ($thisValue > $MaxValue) ? $thisValue : $MaxValue ;

    if(($MaxValue - $thisValue) > $maxLoss)
    {
        $maxLoss = $MaxValue - $thisValue;
    }
}

$maxLoss *= -1 ;

echo $maxLoss;
?>
