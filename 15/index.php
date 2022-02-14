<?php
// Starting in the top left corner of a 2×2 grid, and only being able to move to the right and down, there are exactly 6 routes to the bottom right corner.
// How many such routes are there through a 20×20 grid?

$input = 20;
$dbl = $input * 2;
$first = 1;
$second = 1;

for($i = 1; $i <= $input; $i++)
{
    $first *= $i;
}

$input++;
for($i = $input; $i <= $dbl; $i++)
{
    $second *= $i;
}

echo $second / $first;

//echo $sum = number_format($sum,0,'','');