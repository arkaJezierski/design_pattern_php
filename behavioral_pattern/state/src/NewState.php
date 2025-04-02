<?php

namespace App\Src;

use App\Interfaces\OrderState;

class NewState implements OrderState
{
    public function proceed(Order $order): void
    {
        echo "Order is now Processing.\n";
        $order->setState(new ProcessingState());
    }

    public function getName(): string
    {
        return "New";
    }
}
