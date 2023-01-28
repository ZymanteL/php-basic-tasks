<?php

// Create a class called Calculator that has a constructor that sets the initial value of the result property to 0. The calculator should have methods to add, subtract, multiply, and divide the two numbers passed to the methods, and update the value of result after for each transaction. The spreadsheet should also have a method called getResult that returns the value of result.

class Calculator {
    public $num1;
    public $num2;
    
    function __construct($num1, $num2)
    {
        $this->num1=$num1;
        $this->num2=$num2;
    }

    function add(){
        return $this->num1 + $this->num2;
    }

    public function subtract(){
        return $this->num1 - $this->num2;
    }

    public function multiply (){
        return $this->num1 * $this->num2;
    }

    public function divide () {
        return $this->num1 / $this->num2;
    }
}

$result = new Calculator(5,4);
echo 'Sum = ' . $result->add() . PHP_EOL;
echo 'Difference = ' . $result->subtract() . PHP_EOL;
echo 'Product = ' . $result->multiply() . PHP_EOL;
echo 'Quotient = ' . $result->divide() . PHP_EOL;