<?php
$perm = [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$count = 1;
$numPerm = 1000000;

while ($count < $numPerm)
{
    $N = count($perm);
    $i = $N - 1;

    while ($perm[$i - 1] >= $perm[$i])
    {
        $i = $i - 1;
    }

    $j = $N;

    while ($perm[$j - 1] <= $perm[$i - 1])
    {
        $j = $j - 1;
    }

    // swap values at position i-1 and j-1
    $i += -1;
    $j += -1;
    $k = $perm[$i];
    $perm[$i] = $perm[$j];
    $perm[$j] = $k;

    $i++;
    $j = $N;

    while ($i < $j)
    {
        $i += -1;
        $j += -1;
        $k = $perm[$i];
        $perm[$i] = $perm[$j];
        $perm[$j] = $k;
        $i++;
        $j--;
    }

    $count++;

    $permNum = "";

    for ($k = 0; $k < count($perm); $k++)
    {
        $permNum = $permNum . $perm[$k];
    }
    echo $permNum . '<br>';

}





