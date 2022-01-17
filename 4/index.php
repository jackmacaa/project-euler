<?php
/*A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
Find the largest palindrome made from the product of two 3-digit numbers.*/

// start with two nums 999 and 999
// multiply then test for palindrome
// decreased first to 998 and leave other 999
// multiply then test for palindrome
// decrease 2nd to 998 and leave first 998
// repeat till found

function checkPalindrome($first, $second)
{
    $sum = strval($first * $second);
    $len = strlen($sum) - 1;
    $n = 0;

    while($first > 99)
    {

        while($n == 0)
        {
            if($sum == strrev($sum))
            {
                return $sum;
            }
            $first--;
            $sum = strval($first * $second);
            $n = 1;
        }

        while($n == 1)
        {
            if($sum == strrev($sum))
            {
                return $sum;
            }
            $second--;
            $sum = strval($first * $second);
            $n = 0;
        }

    }

}
/*$sum = '901109';
$len = strlen($sum) - 1;

for($i = 0; $i < $len; $i++)
{
    if($sum[$i] == $sum[$len])
    {
        if($sum[$i + 1] == $sum[$len - 1])
        {
            if ($sum[$i + 2] == $sum[$len - 2])
            {
                echo $sum;
            }
        }
    }
}*/

var_dump(checkPalindrome(999, 999));
