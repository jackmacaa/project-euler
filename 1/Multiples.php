<?php
/*If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
Find the sum of all the multiples of 3 or 5 below 1000*/
namespace project;

class Multiples
{
    private array $allNums;

    public function __construct()
    {
        $this->allNums = [];
    }

    public function multiplier(int $input){

        // create array from user input
        for($i = 1; $i < $input; $i++){
            $this->allNums[] += $i;
        }
        //var_dump($this->allNums);

        // add up values in allNums that are multiples of 3 or 5
        $sum = 0;
        foreach($this->allNums as $val){
            if($val % 3 == 0 || $val % 5 == 0){
                $sum += $val;
            }
        }

        return $sum;

    }

}