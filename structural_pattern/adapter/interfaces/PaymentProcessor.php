<?php

namespace App\Interfaces;

interface PaymentProcessor
{
    public function pay(float $amount): void;
}
