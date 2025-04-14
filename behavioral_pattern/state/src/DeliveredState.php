<?php

namespace App\Src;

use App\Interfaces\Stateable;

class DeliveredState implements Stateable
{
    public function proceed(Order $order): void
    {
        print "Order is already Delivered. No further transitions.\n";
    }

    public function getName(): string
    {
        return "Delivered";
    }
}
