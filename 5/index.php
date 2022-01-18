<?php
/*2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.

What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?*/

function divide()
{
    $answer = 2520;
    $count = 0;

   while($count < 20)
    {
        for($i = 20; $i > 1; $i--)
        {
            if(($answer % 19) == 0 && ($answer % 17) == 0 && ($answer % 13) == 0 && ($answer % 11) == 0 )
            {
                if(($answer % $i) == 0)
                {
                    $count++;
                }
                else
                {
                    $count = 0;
                    $answer++;
                }
            }
            else
            {
                $answer++;
            }

        }
    }
    echo $answer . " ";
}

divide();