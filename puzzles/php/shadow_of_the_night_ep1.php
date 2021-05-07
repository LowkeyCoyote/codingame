<?php

// $W: width of the building.
// $H: height of the building.
fscanf(STDIN, "%d %d", $W, $H);
// $N: maximum number of turns before game over.
fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%d %d", $X0, $Y0);

$x1 = 0;
$x2 = $W - 1;

$y1 = 0;
$y2 = $H - 1;

// game loop
while (true)
{
    // $bombDir: the direction of the bombs from batman's current location (U, UR, R, DR, D, DL, L or UL)
    fscanf(STDIN, "%s", $bombDir);


    if(strpos($bombDir, "R") !== false)
    {
        $x1 = $X0 + 1;
    }
    elseif(strpos($bombDir, "L") !== false)
    {
        $x2 = $X0 - 1;
    }

    if(strpos($bombDir, "D") !== false)
    {
        $y1 = $Y0 + 1;
    }
    elseif(strpos($bombDir, "U") !== false)
    {
        $y2 = $Y0 - 1;
    }

    $X0 = $x1 + floor(($x2 - $x1) / 2);
    $Y0 = $y1 + floor(($y2 - $y1) / 2);

    echo("$X0 $Y0\n");
}
?>
