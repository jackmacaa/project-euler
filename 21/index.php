<?php

$eval = 220;
$total = [];
$start = 1;

while($eval % 2 === 0)
{
    $total[] += $eval / 2;
    $eval = $eval / 2;
}

$eval = 220;

while($start < $eval)
{
    if ($eval % $start === 0)
    {
        $total[] += $start;
        $start++;
    }
}

var_dump($total);