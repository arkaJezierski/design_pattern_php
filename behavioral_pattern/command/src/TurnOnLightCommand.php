<?php

namespace App\Src;

use App\Interfaces\Command;

class TurnOnLightCommand implements Command
{
    public function __construct(private Light $light) {}

    public function execute(): void
    {
        $this->light->turnOn();
    }
}
