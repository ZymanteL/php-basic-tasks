<?php

// Write a function that takes an associative array of people and their addresses as an argument, and returns an array of all the unique cities where the people live.

$peopleAdresses = ["Tomas" => "Kaunas", "Lukas" => "Vilnius", "Marius" => "Vilnius", "Gytis" => "Marijampolė"];

function uniqueCities ($arr) {
   $newArr = array_count_values($arr);
   return $newArr;
}

print_r(uniqueCities($peopleAdresses));