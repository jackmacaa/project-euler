<?php
// For example, 10! = 10 × 9 × ... × 3 × 2 × 1 = 3628800,
//and the sum of the digits in the number 10! is 3 + 6 + 2 + 8 + 8 + 0 + 0 = 27.
//
//Find the sum of the digits in the number 100!

$num = 100;
$factorial = 1;
for ($x=$num; $x>=1; $x--)
{
    $factorial = $factorial * $x;
}
echo $factorial . '<br>';
$num = number_format($factorial,0,'','');

echo $num . '<br>';

$num = '93326215443944152681699238856266700490715968264381621468592963895217599993229915608941463976156518286253697920827223758251185210916864000000000000000000000000';
$sum = 0;

for ($i = 0; $i < strlen($num); $i++)
{
    $sum += $num[$i];
}

echo $sum;

