<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\FileLoggerFactory;
use App\Src\DatabaseLoggerFactory;

function runLogger(\App\Interfaces\LoggerFactory $factory): void
{
    $logger = $factory->createLogger();
    $logger->log("User has logged in.");
}

print "--- File Logger ---\n";
runLogger(new FileLoggerFactory());

print "\n--- Database Logger ---\n";
runLogger(new DatabaseLoggerFactory());
