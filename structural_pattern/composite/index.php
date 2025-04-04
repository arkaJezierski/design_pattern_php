<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\MenuItem;
use App\Src\MenuGroup;

// Creating MenuGroup object
$mainMenu = new MenuGroup("Main Menu");

// Creating MenuItem objects and adding them to MenuGroup
$mainMenu->add(new MenuItem("Home"));
$mainMenu->add(new MenuItem("About"));

// Creating new MenuGroup and MenuItem objects and adding them to new MenuGroup
$productsMenu = new MenuGroup("Products");
$productsMenu->add(new MenuItem("Laptops"));
$productsMenu->add(new MenuItem("Phones"));

$mainMenu->add($productsMenu);
$mainMenu->add(new MenuItem("Contact"));

$mainMenu->render();
