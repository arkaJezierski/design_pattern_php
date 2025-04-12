<?php

namespace App\Src;

use App\Interfaces\Button;

class MacButton implements Button
{
    public function render(): void
    {
        echo "Rendering macOS-style button\n";
    }
}
