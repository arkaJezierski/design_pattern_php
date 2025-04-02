<?php

namespace App\Interfaces;

use App\Interfaces\Visitorable;

interface Documentable
{
    public function accept(Visitorable $visitor): void;
}
