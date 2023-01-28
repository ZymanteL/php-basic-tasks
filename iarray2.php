
<?php

// Write a function that takes an array of numbers as an argument and returns the sum of all the numbers in the array.

$myArray = [12, 24, 109, 53, 88, 7];

function sum($arr) {
    return array_sum($arr);
}

echo sum($myArray);