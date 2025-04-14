<?php

namespace App\Src;

use App\Interfaces\Logger;

class DatabaseLogger implements Logger
{
    public function log(string $message): void
    {
        print "Logged to database: $message\n";
    }
}
