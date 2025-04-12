<?php

namespace App\Src;

use App\Interfaces\GUIFactory;
use App\Interfaces\Button;
use App\Interfaces\Checkbox;

class MacFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new MacCheckbox();
    }
}
