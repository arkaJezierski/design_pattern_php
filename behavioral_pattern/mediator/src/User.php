<?php

namespace App\Src;

use App\Interfaces\Colleague;
use App\Interfaces\Mediator;

class User implements Colleague
{
    private string $name;
    private ?Mediator $mediator = null;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }

    public function send(string $message): void
    {
        echo "{$this->name} sends: $message\n";
        $this->mediator?->send($message, $this);
    }

    public function receive(string $message): void
    {
        echo "{$this->name} receives: $message\n";
    }

    public function getName(): string
    {
        return $this->name;
    }
}
