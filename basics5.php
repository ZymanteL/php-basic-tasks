<?php

/* According to the given point evaluation table, submit an evaluation.
0-29 failed
30-34 1
35-39 2
40-44 3
45-49 4
50-60 5 */

$points = readline("How much points did you get: ");

if ($points <= 60) {
    if ($points <= 29) {
        echo "failed";
    } elseif ($points <= 34) {
        echo "1";
    } elseif ($points <= 39) {
        echo "2";
    } elseif ($points <= 44) {
        echo "3";
    } elseif ($points <= 49) {
        echo "4";
    } else {
        echo "5";
    }
} else {
    echo "Invalid data.";
}
