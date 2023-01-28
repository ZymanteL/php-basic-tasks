<?php

// Find the largest number from the two givens. Try several methods.

$num1 = readline("First number: ");
$num2 = readline("Second number: ");

if ($num1 > $num2) {
    echo "$num1 is greater than $num2\n";
} else {
    echo "$num1 is not greater than $num2\n";
}

$var = max($num1, $num2);
echo "$var is greater\n";
