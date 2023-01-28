<?php

// Write a function that takes an array of strings as an argument and returns an array of the strings sorted in alphabetical order.

$myArray = ["dobermanas", "adata", "zylė", "kaučiukas", "jojikas"];

function alph($arr) {
    sort($arr);
    return $arr;
}

print_r(alph($myArray));