<?php

namespace App\Src;

use App\Interfaces\OrderState;

class DeliveredState implements OrderState
{
    public function proceed(Order $order): void
    {
        echo "Order is already Delivered. No further transitions.\n";
    }

    public function getName(): string
    {
        return "Delivered";
    }
}
