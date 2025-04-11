<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\PaymentService;
use App\Src\ShippingService;
use App\Src\NotificationService;
use App\Src\OrderFacade;

// creating facade with other objects
$facade = new OrderFacade(
    new PaymentService(),
    new ShippingService(),
    new NotificationService()
);

// use facade to run every object
$facade->placeOrder(199.99, "123 Main St", "john@example.com");
