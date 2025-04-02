<?php

namespace App\Interfaces;

use App\Src\Order;

interface Stateable
{
    public function proceed(Order $order): void;
    public function getName(): string;
}
