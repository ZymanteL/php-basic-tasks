<?php
// Write a function that takes an array of integers and returns the average of all the values in the array.
$myArray = [27, 15, 31, 19, 6];

function average($arr) {
    $result = array_sum($arr)/count($arr);
    return $result;
}

print_r(average($myArray));