<?php

function func($r)
{

    $array = array_map('intval', $split = str_split(base_convert($r, 10, 2), 1));

    // $r -> tableau binaire //

    $result = 0;

    for($i = 0; $i < count($array); $i++)
    {
        if($array[$i] == 0)
        {
            $result += 4;
        }
        elseif($array[$i] == 1)
        {
            $result += 3;
        }
    }

    return $result;
}


fscanf(STDIN, "%d %d", $start, $n);
{

    $final = $start;

    for($j = 0; $j < $n; $j++)
    {

        $final = func($final);

        // pattern : func(18) = 18 //

        if($final == 18)
        {
            break;
        }

        // pattern : func(13) = 13 //

        elseif($final == 13)
        {
            break;
        }
    }
}

echo("$final\n");

?>
