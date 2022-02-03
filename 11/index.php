<?php

$file = 'num.txt';
$str = file_get_contents($file);

$arr2 = explode(PHP_EOL, $str);

//var_dump($arr2);

//$arr = [];
$sum = 0;
for($i = 0; $i < count($arr2); $i++)
{
    $sum += $arr2[$i];
}

$dec = number_format($sum,0,'','');

for($i = 0; $i < 10; $i++)
{
    echo $dec[$i];
}