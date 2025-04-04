<?php

namespace App\Src;

use App\Interfaces\Message;

class LoggerDecorator implements Message
{
    public function __construct(private Message $message) {}

    public function getContent(): string
    {
        $content = $this->message->getContent();
        print "Logging message: \"$content\"\n";
        return $content;
    }
}
