<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\Product;
use App\Src\ProductCollection;

// ProductCollection object creating
$collection = new ProductCollection();

$collection->addProduct(new Product("Keyboard", 99.99));
$collection->addProduct(new Product("Mouse", 49.99));
$collection->addProduct(new Product("Monitor", 299.00));


// Show all elements
while ($collection->valid()) {
    print $collection->current();
    $collection->next();
}

