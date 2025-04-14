<?php

namespace App\Interfaces;

use App\Interfaces\Logger;

interface LoggerFactory
{
    public function createLogger(): Logger;
}
