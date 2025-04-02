<?php

namespace App\Src;

use App\Interfaces\Document;
use App\Interfaces\DocumentVisitor;

class Invoice implements Document
{
    public string $number;
    public float $amount;

    public function __construct(string $number, float $amount)
    {
        $this->number = $number;
        $this->amount = $amount;
    }

    public function accept(DocumentVisitor $visitor): void
    {
        $visitor->visitInvoice($this);
    }
}
