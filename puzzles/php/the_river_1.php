<?php


function func($r)
{
    $r = strval($r);
    $tabR = str_split($r);
    $tabR = array_map('intval',$tabR);
    return ($r + array_sum($tabR));
}


fscanf(STDIN, "%d", $r1);
fscanf(STDIN, "%d", $r2);

while($r1 != $r2)
{
    if($r1 < $r2)
    {
        $r1 = func($r1);
    }
    else
    {
        $r2 = func($r2);
    }
}

echo $r1;

?>
