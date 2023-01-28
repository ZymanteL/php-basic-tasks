<?php

// Find the sum of all numbers in the specified interval. For example: interval[1;5], the sum of the numbers in the interval is equal to 15.

$min = readline("Enter the beginning of the interval: ");
$max = readline("Record the end of the interval: ");

$sum = 0;

for ($a = $min; $a <= $max; $a++) {
    $sum += $a;
}

print_r($sum);
