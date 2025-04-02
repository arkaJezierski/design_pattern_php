<?php

namespace App\Src;

use App\Interfaces\Stateable;

class ProcessingState implements Stateable
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
