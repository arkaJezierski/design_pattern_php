<?php

namespace App\Interfaces;

interface Renderable
{
    public function render(int $depth = 0): void;
}
