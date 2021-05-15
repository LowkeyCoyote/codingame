<?php


function func($r)
{
    $r = strval($r);
    $tabR = str_split($r);
    $tabR = array_map('intval',$tabR);
    return ($r + array_sum($tabR));
}

$result = "NO";

fscanf(STDIN, "%d", $r1);

for($i = 0; $i < $r1; $i++)
{

    $river = func($i);

    if($river == $r1)
    {
        $result = "YES";
    }
}

echo("$result\n");

?>