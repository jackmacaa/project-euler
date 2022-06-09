<?php
//A permutation is an ordered arrangement of objects. For example, 3124 is one possible permutation of the digits 1, 2, 3 and 4. If all of the permutations are listed numerically or alphabetically, we call it lexicographic order. The lexicographic permutations of 0, 1 and 2 are:
//
//012   021   102   120   201   210
//
//What is the millionth lexicographic permutation of the digits 0, 1, 2, 3, 4, 5, 6, 7, 8 and 9?
$input = '012';
$len = strlen($input) - 1;

$new = ['012'];
$count = 0;

while($count < $len)
{
    for($j = 2; $j >= 0; $j--)
    {
        $save = $input;

        $k = $input[$j];
        $input[$j] = $input[$j - 1];
        $input[$j - 1] = $k;

        $new[] = $input;

        $input = $save;
    }

    $count++;
}



var_dump($new);