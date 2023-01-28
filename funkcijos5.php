<?php

// Create a function called get_person that takes an associative array of information abouta person as its parameter, and returns the person's name. Then call the function, passing in an associative array like the one in the example in previous question, and store the result in a variable called $name. Print out the value of $name to the screen.

function get_person($asso_array)
{

        $name = $asso_array["name"];

    return $name;
}

$person = ["name" => "Tadas", "age" => 22, "city" => "Vilnius", "role" => "admin"];

$name = get_person($person);

echo($name);
