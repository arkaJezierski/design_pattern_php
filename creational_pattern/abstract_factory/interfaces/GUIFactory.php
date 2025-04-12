<?php

namespace App\Interfaces;

interface GUIFactory
{
    public function createButton(): Button;
    public function createCheckbox(): Checkbox;
}
