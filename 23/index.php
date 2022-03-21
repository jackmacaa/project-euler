<?php
//A perfect number is a number for which the sum of its proper divisors is exactly equal to the number. For example, the sum of the proper divisors of 28 would be 1 + 2 + 4 + 7 + 14 = 28, which means that 28 is a perfect number.
//A number n is called deficient if the sum of its proper divisors is less than n and it is called abundant if this sum exceeds n.
//As 12 is the smallest abundant number, 1 + 2 + 3 + 4 + 6 = 16, the smallest number that can be written as the sum of two abundant numbers is 24. By mathematical analysis, it can be shown that all integers greater than 28123 can be written as the sum of two abundant numbers. However, this upper limit cannot be reduced any further by analysis even though it is known that the greatest number that cannot be expressed as the sum of two abundant numbers is less than this limit.
//Find the sum of all the positive integers which cannot be written as the sum of two abundant numbers.
//As 12 is the smallest abundant number, 1 + 2 + 3 + 4 + 6 = 16
$limit = 28123;

function createArray(int $num): array
{
    $arr = [];

    for($i = 0; $i < $num; $i++)
    {
        $arr[] = $i;
    }

    return $arr;
}

function abundantNums(int $num): array
{
    $lim = $num;
    $div = [];
    $abundant = [];

    for($i = 12; $i < $lim; $i++)
    {
        $div = [];

        for($j = 1; $j <= $i/2; $j++)
        {
            if($i % $j == 0)
            {
                $div[] = $j;
            }
        }

        $sum = array_sum($div);

        if($sum > $i)
        {
            $abundant[] = $i;
        }
    }

   return $abundant;
}

$abun = abundantNums($limit);

$arr = createArray($limit);

function nonAbundant(array $abun, array $arr, int $limit): array
{

    for($i = 0; $i < count($abun); $i++)
    {
        for($j = 0; $j < $limit; $j++)
        {
            if($abun[$i] + $abun[$j] < $limit)
            {
                $arr[$abun[$i] + $abun[$j]] = 0;
            }
            else
            {
                break;
            }
        }
    }

    return $arr;
}

$new = nonAbundant($abun, $arr, $limit);

echo array_sum($new);


