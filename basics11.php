<?php

// Calculate the value of the function in the interval [-5;5]. Division by x1 is not possible, "bypass" it.

$interval = [];

for ($i = -5; $i <= 5; $i++) {
    if ($i === 0) {
        continue;
    } else {
        $div = 1 / $i;
        $interval[] = "$div";
    }
}

print_r($interval);
