<?php

namespace App\Src;

use App\Interfaces\PaymentStrategy;

class BankTransferPayment implements PaymentStrategy
{
    public function pay(float $amount): void
    {
        echo "Processing \${$amount} Bank Transfer...\n";
    }
}
