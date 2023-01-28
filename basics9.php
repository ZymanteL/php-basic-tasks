<?php

// Print all three-digit numbers that are divisible by five.

$max = readline("Enter up to which number to generate: ");

$interval = [];

for ($i = 1; $i <= $max; $i++) {
    if ($i % 5 == 0) {
        $interval[] = $i;
    }
}

print_r($interval);