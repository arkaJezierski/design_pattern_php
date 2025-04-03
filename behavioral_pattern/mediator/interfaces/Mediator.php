<?php

namespace App\Interfaces;

interface Mediator
{
    public function send(string $message, Colleague $sender): void;
}
