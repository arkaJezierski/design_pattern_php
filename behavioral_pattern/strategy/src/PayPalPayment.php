<?php

namespace App\Src;

use App\Interfaces\PaymentStrategy;

class PayPalPayment implements PaymentStrategy
{
    public function pay(float $amount): void
    {
        echo "Processing \${$amount} PayPal...\n";
    }
}
