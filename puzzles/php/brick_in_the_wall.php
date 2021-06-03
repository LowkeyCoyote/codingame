<?php

function amountOfwork($L, $m)
{
    return floatval((($L - 1) * 6.5 / 100) * 10 * $m);
}

// list weight bricks //
$listWeight = [];
// number of brick per row //
$rowBricks = 0;
// minimal amount of work //
$minimalWork = 0;

$l = 1;
fscanf(STDIN, "%d", $X);
fscanf(STDIN, "%d", $N);
$inputs = explode(" ", fgets(STDIN));
for ($i = 0; $i < $N; $i++)
{
    $m = intval($inputs[$i]);
    $listWeight[] = $m;
    rsort($listWeight);
}

for($j = 0; $j < count($listWeight); $j++)
{
    $minimalWork += amountOfwork($l, $listWeight[$j]);
    $rowBricks += 1;

    if($rowBricks == $X)
    {
        $l += 1;
        $rowBricks = 0;
    }
}

$minimalWork = number_format($minimalWork, 3,'.','');

echo("$minimalWork\n");

?>
