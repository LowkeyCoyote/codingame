<?php

fscanf(STDIN, "%d", $n);
for ($i = 0; $i < $n; $i++)
{
    $sumOdd = $sum = 0;
    $cardNumber = str_split(str_replace(' ','', stream_get_line(STDIN, 20 + 1, "\n")));

    for($j = 0; $j < 16; $j += 2)
    {

        $sumOdd += $cardNumber[$j+1];

        $number = $cardNumber[$j]*2;
        if($number > 9)
        {
            $number -= 9;
        }
        $sum += $number;
    }

    if(($sum + $sumOdd)%10 == 0)
    {
        echo "YES\n";
    }
    else
    {
        echo "NO\n";
    }
}
?>
