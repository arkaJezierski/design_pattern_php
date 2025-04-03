<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\SalesReport;
use App\Src\InventoryReport;

// Create SalesReport object and run generate method which is inherited from ReportGenerator class
print "--- Sales Report ---\n";
$sales = new SalesReport();
$sales->generate();

// Create InventoryReport object and run generate method which is inherited from ReportGenerator class
print "--- Inventory Report ---\n";
$inventory = new InventoryReport();
$inventory->generate();
