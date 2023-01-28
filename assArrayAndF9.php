<?php

// Create an array of associative arrays, where each associative array represents a person with a name, age, and address. Sort the array by age

$people = array(
array("name" => "John", "age" => 25, "adress" => "123 Main St." ),
array("name" => "Jane", "age" => 32, "adress" => "456 Maple Ave." ),
array("name" => "Bob", "age" => 41, "adress" => "789 Oak St." ),
);

//Sort the array by age
usort($people, function($a, $b) {
    return $a['age'] > $b['age'];
});

//Print the sorted array
foreach ($people as $person) {
    echo $person['name']." is ".$person['age']." years old and lives at " . $person['adress']."\n";
}