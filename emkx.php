<?php


$value1 = $argv[1];

$all = explode(',', $value1);
//print_r($arr);


// create new array of unique entries
$unique = array_unique($all);

// create array of dups
$duplicates = array_diff_assoc($all, $unique);

print_r($duplicates);
exit;

// edit duplicates
foreach ($duplicates as $key => $val) {
    $i = 1;


}
