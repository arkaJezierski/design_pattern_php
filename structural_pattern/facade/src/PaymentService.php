<?php

namespace App\Src;

class PaymentService
{
    public function pay(float $amount): void
    {
        echo "Payment of $amount completed.\n";
    }
}
