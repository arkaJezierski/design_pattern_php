<?php

namespace App\Src;

use App\Interfaces\Documentable;
use App\Interfaces\Visitorable;

class Order implements Documentable
{
    public string $customer;
    public array $items;

    public function __construct(string $customer, array $items)
    {
        $this->customer = $customer;
        $this->items = $items;
    }

    public function accept(Visitorable $visitor): void
    {
        $visitor->visitOrder($this);
    }
}
