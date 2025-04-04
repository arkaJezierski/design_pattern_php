<?php

namespace App\Src;

use App\Interfaces\Renderer;

class CanvasRenderer implements Renderer
{
    public function render(string $shapeName, array $props): void
    {
        print "Drawing $shapeName on Canvas with: " . json_encode($props) . "\n";
    }
}
