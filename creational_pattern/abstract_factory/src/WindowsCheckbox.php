<?php

namespace App\Src;

use App\Interfaces\Checkbox;

class WindowsCheckbox implements Checkbox
{
    public function render(): void
    {
        print "Rendering Windows-style checkbox\n";
    }
}
