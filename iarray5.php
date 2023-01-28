<?php

// Write a function that takes an array of integers and an integer value, and returns the number of times the value appears in the array.

$myArray = [15, 23, 15, 78, 15];

function appears($arr) {
    $times = array_count_values($arr);
    return $times;
}

print_r(appears($myArray));