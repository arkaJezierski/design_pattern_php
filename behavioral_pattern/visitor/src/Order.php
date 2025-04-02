<?php

namespace App\Src;

use App\Interfaces\Document;
use App\Interfaces\DocumentVisitor;

class Order implements Document
{
    public string $customer;
    public array $items;

    public function __construct(string $customer, array $items)
    {
        $this->customer = $customer;
        $this->items = $items;
    }

    public function accept(DocumentVisitor $visitor): void
    {
        $visitor->visitOrder($this);
    }
}
