<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\SalesReport;
use App\Src\InventoryReport;

echo "--- Sales Report ---\n";
$sales = new SalesReport();
$sales->generate();

echo "--- Inventory Report ---\n";
$inventory = new InventoryReport();
$inventory->generate();
