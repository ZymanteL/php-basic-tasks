<?php

// Create an associative array of products, where each product has a name, price, and quantity in stock. Write a function that takes this array and a product name as arguments, and returnsthe total value of all the products with the given name in stock.

$products = [
    ["title" => "Duona", "price" => 3.5, "amount" => 200],
    ["title" => "Cukrus", "price" => 0.5, "amount" => 22],
    ["title" => "Cukrus", "price" => 1.5, "amount" => 103],
    ["title" => "Duona", "price" => 1.5, "amount" => 100],
];

$prod = readline("Cukrus ar duona?");

function getValue($arr, $title){
$sum = 0;

foreach($arr as $item) {
    if ($item['title'] == $title) {
        $sum += ($item['price'] * $item['amount']);
    }
}

return $sum . PHP_EOL;
}

echo (getValue($products, $prod));