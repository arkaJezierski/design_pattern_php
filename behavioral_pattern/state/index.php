<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\Order;
use App\Src\NewState;

//Creating Order object and set them new State
$order = new Order(new NewState());

//Getting object every state, show them and push it to the next state
for ($i = 0; $i < 4; $i++) {
    echo "Current state: " . $order->getStateName() . "\n";
    $order->proceed();
}
