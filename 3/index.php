<?php
/*The prime factors of 13195 are 5, 7, 13 and 29.
What is the largest prime factor of the number 600851475143 ?*/

function primeNumbers($input)
{
    $prime = [];
    $d = 2;

    while($input > 1)
    {
        while($input % $d == 0)
        {
            $prime[] += $d;
            $input /= $d;
        }
        $d += 1;
    }
    return $prime;

}
var_dump(primeNumbers(600851475143));
var_dump(max(primeNumbers(600851475143)));
