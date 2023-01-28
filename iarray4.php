<?php

// Write a function that takes an array of integers as an argument and returns an array of the integers in reverse order.

$myArray = [27, 35, 5, 9, 11];

function reverse($arr) {
    rsort($arr);
    return $arr;
}

print_r(reverse($myArray));