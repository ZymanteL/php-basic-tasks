<?php

// Write a function that takes an array of strings and an integer value, and returns an array of all the strings that are longer than the integer value.

$myArray = ["draugas", "ola", "malūnas", "yla", "kriaušė"];
$number = 6;

function longer($arr, $int)
{
    foreach ($arr as $element) {
        if (strlen($element) > $int) {
            $words[] = $element;
        }
    }
    return $words;
}

print_r(longer($myArray, $number));
