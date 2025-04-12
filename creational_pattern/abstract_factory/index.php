<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\WindowsFactory;
use App\Src\MacFactory;

// Rendering Windows/MacOS object and using method from implemented interfaces
function renderUI(App\Interfaces\GUIFactory $factory): void {
    $button = $factory->createButton();
    $checkbox = $factory->createCheckbox();

    $button->render();
    $checkbox->render();
}

// Creating Windows object
print "--- Windows UI ---\n";
renderUI(new WindowsFactory());

// Creating MacOS object
print "\n--- MacOS UI ---\n";
renderUI(new MacFactory());
