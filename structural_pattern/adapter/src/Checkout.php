<?php

namespace App\Src;

use App\Interfaces\PaymentProcessor;

class Checkout
{
    public function processPayment(PaymentProcessor $processor): void
    {
        $processor->pay(99.99);
    }
}
