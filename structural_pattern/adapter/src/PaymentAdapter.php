<?php

namespace App\Src;

use App\Interfaces\PaymentProcessor;

class PaymentAdapter implements PaymentProcessor
{
    private OldPaymentGateway $gateway;

    public function __construct(OldPaymentGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function pay(float $amount): void
    {
        // Adapt method
        $this->gateway->makePayment($amount);
    }
}
