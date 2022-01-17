
<?php
/*Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:
1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.*/

    function fib(){
       // create fib seq
       $fibArr = [1,2];
       $sum = 0;

       for($i = 0; $i < 30; $i++)
       {
           $fibArr[] = $fibArr[$i] + $fibArr[$i + 1];
       }

       foreach($fibArr as $val)
       {
           if($val % 2 == 0)
           {
               $sum += $val;
           }
       }

       echo $sum;
    }

    fib();
