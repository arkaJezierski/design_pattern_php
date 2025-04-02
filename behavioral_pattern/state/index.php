<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\Order;
use App\Src\NewState;

$order = new Order(new NewState());

for ($i = 0; $i < 4; $i++) {
    echo "Current state: " . $order->getStateName() . "\n";
    $order->proceed();
}
