<?php

namespace App\Src;

class PaymentService
{
    public function pay(float $amount): void
    {
        print "Payment of $amount completed.\n";
    }
}
