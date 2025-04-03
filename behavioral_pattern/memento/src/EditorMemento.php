<?php

namespace App\Src;

use App\Interfaces\Memento;

class EditorMemento implements Memento
{
    private string $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function getState(): string
    {
        return $this->state;
    }
}
