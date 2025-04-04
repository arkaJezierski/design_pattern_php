<?php

namespace App\Src;

use App\Interfaces\Message;

class BoldDecorator implements Message
{
    public function __construct(private Message $message) {}

    public function getContent(): string
    {
        return "<b>" . $this->message->getContent() . "</b>";
    }
}
