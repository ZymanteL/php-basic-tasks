<?php

// Write a function that takes an associative array of people and their ages as an argument, andreturns the average age of all the people in the array.

$peopleAge = ["Marytė" => 40, "Jolanta" => 14, "Zigmas" => 50, "Alė" => 3];

function average($arr)
{
    $averageAge = array_sum($arr)/count($arr);  
    return $averageAge;
}

echo average($peopleAge);
