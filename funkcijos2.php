<?php

// Create a function called find_largest that takes an array of numbers as its parameter and returns the largest number in that array. Then call the function, passing in the array [1, 9, 4, 7, 3] as an argument, and store the result in a variable called $largest. Print out thevalue of $largest to the screen.

function find_largest($array)
{
    $largest = max($array);
    return $largest;
}

$myArray = [1, 9, 4, 7, 3];

echo find_largest($myArray);
