<?php

namespace App\Src;

use App\Interfaces\Command;

class RemoteControl
{
    private ?Command $command = null;

    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }

    public function pressButton(): void
    {
        if ($this->command) {
            $this->command->execute();
        } else {
            print "No command set.\n";
        }
    }
}
