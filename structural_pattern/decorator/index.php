<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\PlainMessage;
use App\Src\BoldDecorator;
use App\Src\EncryptedDecorator;
use App\Src\LoggerDecorator;

// Creating PlainMessage object with base message
$message = new PlainMessage("Hello World");

// Create Encrypted object which get bolded message which get Logged message which get basic message
$decorated = new EncryptedDecorator(
    new BoldDecorator(
        new LoggerDecorator($message)
    )
);

// Display final output with decorator print form basic message to
print "Final Output: " . $decorated->getContent();
