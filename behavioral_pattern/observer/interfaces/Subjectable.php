<?php

namespace App\Interfaces;

use App\Interfaces\Observerable;

interface Subjectable
{
    public function attach(Observerable $observer): void;
    public function detach(Observerable $observer): void;
    public function notify(string $title): void;
}
