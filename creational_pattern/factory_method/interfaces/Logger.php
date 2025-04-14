<?php

namespace App\Interfaces;

interface Logger
{
    public function log(string $message): void;
}
