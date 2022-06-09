<?php
//
//The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
//
//Find the sum of all the primes below two million

function isPrime($n, $i = 2)
{
    // Base cases
    if ($n <= 2)
        return ($n == 2) ? true : false;
    if ($n % $i == 0)
        return false;
    if ($i * $i > $n)
        return true;

    // Check for next divisor
    return isPrime($n, $i + 1);
}

$primes = [];

for ($i = 2; $i <= 2_000_000; $i++) {
    if (isPrime($i)) {
        $primes[] = $i;
    }
}
var_dump($primes);

//function efficientPrime($input)
//{
//   $prime = [2];
//
//    for ($i = 2; $i <= $input; $i++)
//    {
//        foreach ($prime as $key => $val)
//        {
//                if ($i % $val === 0)
//                {
//                    break;
//                }
//                if (array_key_last($prime) === $key)
//                {
//                    $prime[] = $i;
//                }
//        }
//
//    }
//
//    return array_sum($prime);
//}
//
//echo efficientPrime(2_000_000);

//function exhaustivePrime($input)
//{
//    $prime = [];
//    $count = 0;
//
//    for ($i = 1; $i <= $input; $i++) {
//        $counter = 0;
//        for ($j = 1; $j <= $i; $j++) {
//            if ($counter > 2) {
//                break;
//            }
//            if ($i % $j == 0) {
//                $counter++;
//            }
//        }
//
//        if ($counter == 2) {
//            $prime[] = $i; // store value to array
//        }
//    }
//
//    foreach ($prime as $val) {
//        $count += $val;
//    }
//    return $count;
//}
//
//echo exhaustivePrime(10);

//var_dump(primeNumbers(20000));
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