<?php

namespace App\Src;

use App\Interfaces\Stateable;

class ShippedState implements Stateable
{
    public function proceed(Order $order): void
    {
        print "Order has been Delivered.\n";
        $order->setState(new DeliveredState());
    }

    public function getName(): string
    {
        return "Shipped";
    }
}
