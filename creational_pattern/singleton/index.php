<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\Logger;

$logger1 = Logger::getInstance();
$logger1->log("User logged in.");

$logger2 = Logger::getInstance();
$logger2->log("User performed an action.");

// Check that both loggers are the same instance
print $logger1 === $logger2 ? "✅ Same instance\n" : "Different instances\n";
