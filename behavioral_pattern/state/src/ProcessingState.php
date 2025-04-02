<?php

namespace App\Src;

use App\Interfaces\OrderState;

class ProcessingState implements OrderState
{
    public function proceed(Order $order): void
    {
        echo "Order has been Shipped.\n";
        $order->setState(new ShippedState());
    }

    public function getName(): string
    {
        return "Processing";
    }
}
