<?php

// Create a function called add_numbers that takes two parameters, $a and $b, and returns the sum of those two numbers. Then call the function, passing in the numbers 4 and 7 as arguments, and store the result in a variable called $sum. Print out the value of $sumto the screen.

function add_numbers($number1, $number2)
{
    $add = $number1 + $number2;
    return $add;
}

$sum = add_numbers(4, 7);

echo $sum;
