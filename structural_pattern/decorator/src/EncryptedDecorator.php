<?php

namespace App\Src;

use App\Interfaces\Message;

class EncryptedDecorator implements Message
{
    public function __construct(private Message $message) {}

    public function getContent(): string
    {
        return base64_encode($this->message->getContent());
    }
}
