<?php

namespace App\Src;

class History
{
    private array $history = [];

    public function push(EditorMemento $memento): void
    {
        $this->history[] = $memento;
    }

    public function pop(): ?EditorMemento
    {
        return array_pop($this->history);
    }
}
