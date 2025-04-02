<?php

namespace App\Src;

use App\Interfaces\Documentable;
use App\Interfaces\Visitorable;

class Invoice implements Documentable
{
    public string $number;
    public float $amount;

    public function __construct(string $number, float $amount)
    {
        $this->number = $number;
        $this->amount = $amount;
    }

    public function accept(Visitorable $visitor): void
    {
        $visitor->visitInvoice($this);
    }
}
