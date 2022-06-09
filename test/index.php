<?php

$arr = [
    'label 1' => 'first val',
    'label 2' => '2nd val'
];

foreach($arr as $key => $val)
{
    echo $key;
}


//foreach ($xml as $key => $value) {
//    if (isset($value->{$key})) {
//        $i = 0;
//        foreach ($value->{$key} as $v) {
//            $array[$key][$i++] = (string)$v;
//        }