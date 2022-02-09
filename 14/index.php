<?php

$chain = 0;
$num = 0;

for($i = 1; $i <= 1_000_000; $i++)
{
    $temp = 1;
    $j = $i;

    while($j > 1)
    {
        $k = $j;
        if($j % 2 == 0)
        {
            $j = $j / 2;
            $temp++;
        }
        else
        {
            $j = $j * 3 + 1;
            $temp++;
        }
    }

    if($temp >= $chain)
    {
        $chain = $temp;
        $num = $i;
    }

}

echo $num;