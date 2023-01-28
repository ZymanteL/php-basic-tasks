<?php

// Given a real number x. Write a program to calculate the value of y using the formula y = 16 + 2x. Use the math object.

$num = (int)readline("Your x: ");

$ats = 16 * pow($x, 4) + 2 * $x;

echo ("Your y = $ats");
