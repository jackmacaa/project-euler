<?php

function primeNumbers($input)
{
    $prime = [];
    $count = 0;

    for ($i = 1; $i <= $input; $i++)
    {
        $counter = 0;
        for ($j = 1; $j <= $i; $j++)
        {
            if($counter >2)
            {
                break;
            }
            if ($i % $j == 0)
            {
                $counter++;
            }
        }

        if ($counter == 2)
        {
            $prime[] = $i; // store value to array
        }
    }
    foreach($prime as $val)
    {
        $count += $val;
    }
    return $count;

}
var_dump(primeNumbers(20000));
//var_dump(max(primeNumbers(600851475143)));
