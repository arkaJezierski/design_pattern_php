<?php

namespace App\Src;

class ShippingService
{
    public function ship(string $address): void
    {
        echo "Package shipped to $address.\n";
    }
}
