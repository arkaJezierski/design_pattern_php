<?php

require_once __DIR__ . "vendor/autoload.php";

use App\Src\Invoice;
use App\Src\Order;
use App\Src\Report;
use App\Src\PdfExporterVisitor;

// Creating object with Documentable interface
$documents = [
    new Invoice('INV-2025-01', 1200.50),
    new Order('John Dra', ['Item A', 'Item B']),
    new Report('Q1 Report', 'Revenue increased by 15%.'),
];

// Creating Visitor Pattern Object
$visitor = new PdfExporterVisitor();

// Run Every accept method, send them visitor object and let them run visitor command
foreach ($documents as $document) {
    $document->accept($visitor);
}
