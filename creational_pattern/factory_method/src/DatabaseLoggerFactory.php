<?php

namespace App\Src;

use App\Interfaces\LoggerFactory;
use App\Interfaces\Logger;

class DatabaseLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new DatabaseLogger();
    }
}
