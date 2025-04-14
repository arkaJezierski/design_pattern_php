<?php

namespace App\Src;

use App\Interfaces\LoggerFactory;
use App\Interfaces\Logger;

class FileLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new FileLogger();
    }
}
