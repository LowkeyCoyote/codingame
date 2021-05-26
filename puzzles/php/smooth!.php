<?php

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d", $F);

    while($F % 5 == 0 || $F % 3 == 0 || $F % 2 == 0 )
    {

        if($F % 5 == 0)
        {
            $F = $F / 5;
        }
        elseif($F % 3 == 0)
        {
            $F = $F / 3;
        }
        else
        {
            $F = $F / 2;
        }
    }

    echo $F == 1 ?  "VICTORY\n" : "DEFEAT\n" ;

}

?>