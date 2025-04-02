<?php

namespace App\Src;

use App\Interfaces\OrderState;

class ShippedState implements OrderState
{
    public function proceed(Order $order): void
    {
        echo "Order has been Delivered.\n";
        $order->setState(new DeliveredState());
    }

    public function getName(): string
    {
        return "Shipped";
    }
}
