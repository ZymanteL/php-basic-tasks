<?php

// Write a function that takes an associative array as an argument and returns the values from the array as a string in the following format: "Name: {name}, Age: {age}, Address: {address}".

$info = ["name" => "Akvilė", "age" => 18, "address" => "Vilnius"];

function stringValues($arr)
{
    echo "Name: " . $arr['name'] . ", Age: " . $arr['age'] . ", Address: " . $arr['address'] . ".";
}

stringValues($info);
