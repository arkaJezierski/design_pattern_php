<?php

namespace App\Src;

use App\Interfaces\Strategable;

class CreditCardPayment implements Strategable
{
    public function pay(float $amount): void
    {
        print "Processing \${$amount} Credit Card...\n";
    }
}
