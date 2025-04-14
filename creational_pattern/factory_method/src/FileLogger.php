<?php

namespace App\Src;

use App\Interfaces\Logger;

class FileLogger implements Logger
{
    public function log(string $message): void
    {
        print "Logged to file: $message\n";
    }
}
