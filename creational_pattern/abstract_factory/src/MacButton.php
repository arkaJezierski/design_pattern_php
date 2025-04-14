<?php

namespace App\Src;

use App\Interfaces\Button;

class MacButton implements Button
{
    public function render(): void
    {
        print "Rendering macOS-style button\n";
    }
}
