<?php

namespace App\Src;

use App\Interfaces\Stateable;

class Order
{
    private Stateable $state;

    public function __construct(Stateable $initialState)
    {
        $this->state = $initialState;
    }

    public function setState(Stateable $state): void
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
