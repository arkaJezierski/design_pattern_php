<?php

namespace App\Interfaces;

interface Strategable
{
    public function pay(float $amount): void;
}
