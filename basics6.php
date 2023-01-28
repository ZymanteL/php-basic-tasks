<?php

// Calculate the body mass index and indicate the value. Example: http://sveikas.lt/lt/kmi-skaiciuokle/#

$weight = readline("Enter your weight (kg): ");
$height = readline("Enter your height (cm): ");

$kmi = $weight / ($height / 100) ** 2;

if ($kmi < 18.5) {
    echo "Underweight";
} elseif ($kmi < 25) {
    echo "Normal weight";
} elseif ($kmi < 30) {
    echo "Overweight";
} else {
    echo "Obesity";
}
