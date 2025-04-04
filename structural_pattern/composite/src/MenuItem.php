<?php

namespace App\Src;

use App\Interfaces\Renderable;

class MenuItem implements Renderable
{
    public function __construct(private string $label) {}

    public function render(int $depth = 0): void
    {
        print str_repeat("  ", $depth) . "- " . $this->label . "\n";
    }
}
