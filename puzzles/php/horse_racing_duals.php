<?php

$tableau = [];

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d", $pi);
    $tableau[$i] = $pi;
}

sort($tableau);


$ecart = abs($tableau[0] - $tableau[1]);

for($i = 1 ; $i < ($N - 1);  $i++)
{
    $diff = abs($tableau[$i+1] - $tableau[$i]);

    if($diff < $ecart)
    {
        $ecart = $diff;
    }

}

echo $ecart;
?>
