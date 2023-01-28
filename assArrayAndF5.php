<?php

// Create an associative array that stores information about a car, including its make, model, and year. Write a function that takes this array as an argument and returns a string in the following format: "{year} {make} {model}"

$car = ["make" => "Ford", "model" => "Escape", "year" => 2023];

function newFormat($arr) {
          $newString = $arr['year'] . " " . $arr['make'] . " " . $arr['model'];
          return $newString;
}

var_dump(newFormat($car));
