<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\Light;
use App\Src\TurnOnLightCommand;
use App\Src\TurnOffLightCommand;
use App\Src\RemoteControl;

// Creating Light object
$light = new Light();

// Creating RemoteControl object
$remote = new RemoteControl();

// Send TurnOnLightCommand object to remote and run it in Remote
$remote->setCommand(new TurnOnLightCommand($light));
$remote->pressButton();

// Send TurnOnLightCommand object to remote and run it in Remote
$remote->setCommand(new TurnOffLightCommand($light));
$remote->pressButton();
