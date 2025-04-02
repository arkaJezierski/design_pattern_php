<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\PaymentContext;
use App\Src\CreditCardPayment;
use App\Src\PayPalPayment;
use App\Src\BankTransferPayment;

$context = new PaymentContext();

$context->setStrategy(new CreditCardPayment());
$context->processPayment(100.00);

$context->setStrategy(new PayPalPayment());
$context->processPayment(100.00);

$context->setStrategy(new BankTransferPayment());
$context->processPayment(100.00);
