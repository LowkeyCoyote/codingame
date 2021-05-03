<?php


fscanf(STDIN, "%d", $n);
$inputs = explode(" ", fgets(STDIN));
$minTemp = 5527;

if($n == 0){
    $minTemp = 0;
}

for ($i = 0; $i < $n; $i++)
{
    $thisTemp = intval($inputs[$i]);

    if(abs($thisTemp) < abs($minTemp)){
        $minTemp = $thisTemp;
    }
    elseif(abs($thisTemp) === abs($minTemp)){
        $minTemp = ($minTemp > $thisTemp) ? $minTemp : $thisTemp;
    }
}

echo("$minTemp\n");

?>