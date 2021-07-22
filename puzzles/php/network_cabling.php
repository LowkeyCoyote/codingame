<?php

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d %d", $X, $Y);
    $tabX[] = $X;
    $tabY[] = $Y;
}

$lengh = count($tabY);
sort($tabY);
$key = intdiv($lengh, 2);
$med = $tabY[$key];

$distance = max($tabX) - min($tabX);

foreach($tabY as $v)
{
    $distance += abs($med - $v);
}

echo $distance;

?>