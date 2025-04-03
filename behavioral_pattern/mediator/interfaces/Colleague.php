<?php

namespace App\Interfaces;

use App\Interfaces\Mediator;

interface Colleague
{
    public function receive(string $message): void;
    public function send(string $message): void;
    public function setMediator(Mediator $mediator): void;
}
