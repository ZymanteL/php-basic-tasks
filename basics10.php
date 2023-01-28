<?php

// Print all numbers in the interval [0,100], but if the number is divisible by 3, print the word Fizz, if 5 - Buzz, if 3 or 5 - FizzBuzz.

$interval = [];

for ($i = 0; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        $interval[] = "$i FizzBuzz";}
    elseif ($i % 3 == 0) {
        $interval[] = "$i Fizz";
    } elseif ($i % 5 == 0) {
        $interval[] = "$i Buzz";
    } else {
        $interval[] = "$i";
    }
}

print_r($interval);
