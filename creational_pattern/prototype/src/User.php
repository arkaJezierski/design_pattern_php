<?php

namespace App\Src;

use App\Interfaces\Prototype;

class User implements Prototype
{
    public function __construct(
        public string $name,
        public string $role
    ) {}

    public function clone(): self
    {
        return clone $this;
    }

    public function display(): void
    {
        echo "User: {$this->name}, Role: {$this->role}\n";
    }
}
