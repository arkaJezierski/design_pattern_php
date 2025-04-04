<?php

namespace App\Src;

use App\Interfaces\Message;

class PlainMessage implements Message
{
    public function __construct(private string $text) {}

    public function getContent(): string
    {
        return $this->text;
    }
}
