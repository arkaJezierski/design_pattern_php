<?php

namespace App\Src;

use App\Interfaces\PaymentStrategy;

class CreditCardPayment implements PaymentStrategy
{
    public function pay(float $amount): void
    {
        echo "Processing \${$amount} Credit Card...\n";
    }
}
