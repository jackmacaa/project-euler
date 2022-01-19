<?php
/*By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
What is the 10 001st prime number?*/

function checkPrimeNumber($input)
{
    $user = $input;

    for($i = 2; $i <= $user/2; $i++)
    {
        if($user % $i == 0)
        {
            return false;
        }
    }
    return true;
}

function countPrimeNumber($num)
{
    $user = $num;
    $prime = 0;
    $count = 0;
    $natural = 1;

    while($count <= $user)
    {
        if(checkPrimeNumber($natural))
        {
            $count++;
            $prime = $natural;
        }
        $natural++;
    }
    return $prime;
}

echo countPrimeNumber(10001);
