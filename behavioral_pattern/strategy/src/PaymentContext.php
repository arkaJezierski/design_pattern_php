<?php

namespace App\Src;

use App\Interfaces\PaymentStrategy;

class PaymentContext
{
    private PaymentStrategy $strategy;

    public function setStrategy(PaymentStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function processPayment(float $amount): void
    {
        $this->strategy->pay($amount);
    }
}
