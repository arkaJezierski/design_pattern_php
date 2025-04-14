<?php

namespace App\Src;

class TextEditor
{
    private string $content = '';

    public function write(string $text): void
    {
        $this->content .= $text;
    }

    public function show(): void
    {
        print "Editor content: \"{$this->content}\"\n";
    }

    public function save(): EditorMemento
    {
        return new EditorMemento($this->content);
    }

    public function restore(EditorMemento $memento): void
    {
        $this->content = $memento->getState();
    }
}
