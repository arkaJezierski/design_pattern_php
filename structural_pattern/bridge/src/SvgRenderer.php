<?php

namespace App\Src;

use App\Interfaces\Renderer;

class SvgRenderer implements Renderer
{
    public function render(string $shapeName, array $props): void
    {
        print "Rendering $shapeName as SVG with: " . json_encode($props) . "\n";
    }
}
