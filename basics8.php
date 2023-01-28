<?php

// Choose a program that, after entering the month number in the year, would determine what time of year it is: summer, autumn, winter, spring.

$month = readline("Enter the month: ");

switch ($month) {
    case 1:
    case 2:
    case 12:
        echo "Winter";
        break;
    case 3:
    case 4:
    case 5:
        echo "Spring";
        break;
    case 6:
    case 7:
    case 8:
        echo "Summer";
        break;
    case 9:
    case 10:
    case 11:
        echo "Autumn";
        break;
    default:
        echo "You did not enter the number of the month.";
}
