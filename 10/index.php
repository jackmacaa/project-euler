<?php

function primeNumbers($input)
{
    $prime = [];
    $count = 0;

    for ($i = 1; $i <= $input; $i++)
    {
        $counter = 0;
        for ($j = 1; $j <= $i; $j++)
        {
            if($counter >2)
            {
                break;
            }
            if ($i % $j == 0)
            {
                $counter++;
            }
        }

        if ($counter == 2)
        {
            $prime[] = $i; // store value to array
        }
    }
    foreach($prime as $val)
    {
        $count += $val;
    }
    return $count;

}
var_dump(primeNumbers(20000));
//var_dump(max(primeNumbers(600851475143)));

/*$top = 20000000;
$plist = array_fill(2,$top,1);
for ($a = 2 ; $a <= sqrt($top)+1; $a++)
{
    if ($plist[$a] == 1)
        for ($b = ($a+$a) ; $b <= $top; $b+=$a)
        {
            $plist[$b] = 0;
        }
}

$sum = 0;
foreach ($plist as $k=>$v)
{
    $sum += $k*$v;
}
echo $sum; */