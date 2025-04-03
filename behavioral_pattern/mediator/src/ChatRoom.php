<?php

namespace App\Src;

use App\Interfaces\Mediator;
use App\Interfaces\Colleague;

class ChatRoom implements Mediator
{
    private array $users = [];

    public function registerUser(Colleague $user): void
    {
        $this->users[] = $user;
        $user->setMediator($this);
    }

    public function send(string $message, Colleague $sender): void
    {
        foreach ($this->users as $user) {
            if ($user !== $sender) {
                $user->receive("{$sender->getName()} says: $message");
            }
        }
    }
}
