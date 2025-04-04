<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\OldPaymentGateway;
use App\Src\PaymentAdapter;
use App\Src\Checkout;

// Creating OldPaymentGateway object
$oldGateway = new OldPaymentGateway();

// Creating PaymentAdapter object and send OldPaymentGateway object
$adapter = new PaymentAdapter($oldGateway);

// Run process of Payment and check result
$checkout = new Checkout();
$checkout->processPayment($adapter);
