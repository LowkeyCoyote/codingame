<?php

fscanf(STDIN, "%d", $N);

$m_t_sec = 0;

$m_t = "";

for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%s", $t);


    $t_sec = explode(':', $t);
    $t_sec = ($t_sec[0] * 3600) + ($t_sec[1] * 60) + $t_sec[2];


    if($i == 0 || $t_sec < $m_t_sec)
    {
        $m_t_sec = $t_sec;
        $m_t = $t;
    }
}

echo("$m_t\n");

?>
