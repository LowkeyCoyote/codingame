<?php

// retourne la somme des carrées des chiffres de x //

function func($x)
{
    $array = array_map('intval', str_split($x));
    for($j = 0; $j < count($array);$j++)
    {
        $array[$j] = $array[$j] ** 2;
    }
    return array_sum($array);
}

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    $x = stream_get_line(STDIN, 128 + 1, "\n");
    $xTest = $x;

    // 4 fait partie de la suite périodique si x est malheureux" //
    while($xTest != 1 or $xTest != 4)
    {
        $xTest = func($xTest);

        if($xTest == 1)
        {
            echo $x." :)\n" ;
            break;
        }
        elseif($xTest == 4)
        {
            echo $x." :(\n";
            break;
        }
    }
}

?>
