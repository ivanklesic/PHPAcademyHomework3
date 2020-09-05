<?php

function reverseString(string $string) : string{
    $stringArray = str_split($string);
    $reverseArray = [];
    foreach($stringArray as $letter){
        array_unshift($reverseArray, $letter);
    }
    return implode($reverseArray);
}
