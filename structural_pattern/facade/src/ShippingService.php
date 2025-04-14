<?php

namespace App\Src;

class ShippingService
{
    public function ship(string $address): void
    {
        print "Package shipped to $address.\n";
    }
}
