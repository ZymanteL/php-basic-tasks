<?php

// Write a function that takes an associative array of students and their grades as an argument, and returns an array of students who have passed (have a grade of 60 or higher).

$students = ["Akvilė" => 30, "Tomas" => 61, "Tadas" => 80, "Neringa" => 20];

function passed($arr)
{
    foreach ($arr as $key => $value) {
        if ($value >= 60) {
            $list[] = $key;
        }
    }
    return $list;
}

print_r(passed($students));
