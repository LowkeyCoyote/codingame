<?php


fscanf(STDIN, "%d", $N);

$pi = [];
$distanceMax = 1e6;

for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d %d", $V, $E);
    $pi[$i] = [$V, $E];

    for($j = 0;$j < $i; $j++)
    {
        $V2 = $pi[$j][0];
        $E2 = $pi[$j][1];

        $distance = abs($V2 - $V) + abs($E2 - $E);

        if($distance < $distanceMax)
        {
            $distanceMax = $distance;
        }
    }
}

echo $distanceMax;

?>