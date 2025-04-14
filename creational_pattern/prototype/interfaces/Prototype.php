<?php

namespace App\Interfaces;

interface Prototype
{
    public function clone(): self;
}
