<?php

namespace App\Src;

use App\Interfaces\Checkbox;

class MacCheckbox implements Checkbox
{
    public function render(): void
    {
        echo "Rendering macOS-style checkbox\n";
    }
}
