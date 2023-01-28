<?php

// Data is coded with numbers. Sunny-1, rainy-2, windy-3, snow-4. Choose a program that, after entering the code, would print its value.

$num = readline("Enter the code: ");

switch ($num) {
    case 1:
        echo "Sunny";
        break;
    case 2:
        echo "Rainy";
        break;
    case 3:
        echo "Windy";
        break;
    case 4:
        echo "Snow";
        break;
    default:
        echo "You did not enter a code.";
}
