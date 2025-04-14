<?php

namespace App\Src;

use App\Interfaces\Button;

class WindowsButton implements Button
{
    public function render(): void
    {
        print "Rendering Windows-style button\n";
    }
}
