<?php

namespace App\Src;

use App\Interfaces\Strategable;

class PayPalPayment implements Strategable
{
    public function pay(float $amount): void
    {
        print "Processing \${$amount} PayPal...\n";
    }
}
