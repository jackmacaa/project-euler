<?php
/*A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
Find the largest palindrome made from the product of two 3-digit numbers.*/

// start with two nums 999 and 999
// multiply then test for palindrome
// decreased first to 998 and leave other 999
// multiply then test for palindrome
// decrease 2nd to 998 and leave first 998
// repeat till found

function checkPalindrome():int
{
    $pal = 0;
    $first = 100;
    while($first <= 999)
    {
        $second = 100;
        $sum = strval($first * $second);
        while($second <= 999)
        {
            if($sum == strrev($sum) && $sum > $pal)
            {
                $pal = $first * $second;
            }
            $second++;
            $sum = strval($first * $second);
        }
        $first++;
    }
    return $pal;
}
var_dump(checkPalindrome());
