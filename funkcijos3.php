<?php

// Create a function called concat_strings that takes two parameters, $string1 and $string2, and concatenates the two strings together with a space in between them. Then call the function, passing in the strings "Hello" and "world" as arguments, and store the result in a variable called $greeting. Print out the value of $greeting to the screen.

function concat_strings($string1, $string2)
{
    $conected = $string1 . " " . $string2;
    return $conected;
}

$greeting = concat_strings("Hello", "world");
echo $greeting;
