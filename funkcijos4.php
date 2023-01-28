<?php

// Create a function called is_even that takes a number as its parameter and returns a Boolean value indicating whether the number is even or odd. Then call the function, passingin the number 12 as an argument, and store the result in a variable called $is_even. Printout the value of $is_even to the screen.

function is_even($num)
{
    if ($num % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

$is_even = is_even(12);
echo $is_even;
