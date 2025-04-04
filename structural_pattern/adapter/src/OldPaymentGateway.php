<?php

namespace App\Src;

class OldPaymentGateway
{
    public function makePayment(float $value): void
    {
        print "Paid $value using OLD payment gateway\n";
    }
}
