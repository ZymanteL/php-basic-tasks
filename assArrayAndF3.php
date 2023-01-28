<?php

// Create an associative array that stores information about a product, including its name, price, and quantity in stock. Write a function that takes this array as an argument and returnsthe total value of the product in stock.

$product = ["name" => "Duona", "price" => 3.5, "quantity" => 200];

function total($arr)
{
    $stockValue = $arr['price'] * $arr['quantity'];
    return $stockValue;
}

echo total($product);
