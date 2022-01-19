<!--The sum of the squares of the first ten natural numbers is, 385
The square of the sum of the first ten natural numbers is, 3085
Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is . 2640
Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.-->
<?php

function sumOfSquares($input)
{
    $sum = 0;
    $user = $input;
    for($i = 1; $i <= $user; $i++)
    {
        $sum += ($i * $i);
    }
    return $sum;
}

function squareOfSum($input)
{
    $sum = 0;
    $user = $input;
    for($i = 1; $i <= $user; $i++)
    {
        $sum += $i;
    }
    return $sum * $sum;
}

$sum_of_squares = sumOfSquares(100);
$square_of_sum = squareOfSum(100);
echo $square_of_sum - $sum_of_squares;
