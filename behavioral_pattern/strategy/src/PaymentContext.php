<?php

namespace App\Src;

use App\Interfaces\Strategable;

class PaymentContext
{
    private Strategable $strategy;

    public function setStrategy(Strategable $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function processPayment(float $amount): void
    {
        $this->strategy->pay($amount);
    }
}
