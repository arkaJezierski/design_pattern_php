<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\SpamFilter;
use App\Src\ProfanityFilter;
use App\Src\LengthFilter;

// Creating base object
$spam = new SpamFilter();
$profanity = new ProfanityFilter();
$length = new LengthFilter();

// Set every filter at the row
$spam->setNext($profanity)->setNext($length);

// Run every object one by one
$spam->apply("Hey, check this out! No badword here.");
