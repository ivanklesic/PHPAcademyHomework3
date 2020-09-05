<?php

function getFactorial(int $number){
    if($number < 0){
        return "Factorial can't accept negative integers.";
    }
    return $number === 0 ? 1 : $number * getFactorial($number - 1);
}


echo getFactorial(5);


