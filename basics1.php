<?php

// Write a program to express the number of days in hours and minutes.

$num = (int)readline("Number of days: ");

$hours = $num * 24;
$minutes = $hours * 60;

echo ("$hours hours and $minutes minutes");
