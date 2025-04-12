<?php

namespace App\Src;

use App\Interfaces\GUIFactory;
use App\Interfaces\Button;
use App\Interfaces\Checkbox;

class WindowsFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new WindowsButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new WindowsCheckbox();
    }
}
