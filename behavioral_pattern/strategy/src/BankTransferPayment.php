<?php

namespace App\Src;

use App\Interfaces\Strategable;

class BankTransferPayment implements Strategable
{
    public function pay(float $amount): void
    {
        print "Processing \${$amount} Bank Transfer...\n";
    }
}
