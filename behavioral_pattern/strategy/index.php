<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\PaymentContext;
use App\Src\CreditCardPayment;
use App\Src\PayPalPayment;
use App\Src\BankTransferPayment;

// Create PaymentContext which controls other object action and choose which object should do the task
$context = new PaymentContext();

// Send CreditCardPayment to strategy object
$context->setStrategy(new CreditCardPayment());
$context->processPayment(100.00);

// Send PayPalPayment to strategy object
$context->setStrategy(new PayPalPayment());
$context->processPayment(100.00);

// Send BankTransferPayment to strategy object
$context->setStrategy(new BankTransferPayment());
$context->processPayment(100.00);
