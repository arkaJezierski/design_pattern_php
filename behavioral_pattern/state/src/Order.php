<?php

namespace App\Src;

use App\Interfaces\OrderState;

class Order
{
    private OrderState $state;

    public function __construct(OrderState $initialState)
    {
        $this->state = $initialState;
    }

    public function setState(OrderState $state): void
    {
        $this->state = $state;
    }

    public function proceed(): void
    {
        $this->state->proceed($this);
    }

    public function getStateName(): string
    {
        return $this->state->getName();
    }
}
