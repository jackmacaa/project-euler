<?php

//2^15 = 32768 and the sum of its digits is 3 + 2 + 7 + 6 + 8 = 26.
//
//What is the sum of the digits of the number 2^1000?

$num = pow(2, 1000);
$num = number_format($num,0,'','');
$sum = 0;

for($i = 0; $i < strlen($num); $i++)
{
    $sum += $num[$i];
}

echo $sum;