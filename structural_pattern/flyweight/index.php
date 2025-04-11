<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Src\IconFactory;
use App\Src\Map;

// create factory object
$factory = new IconFactory();

// create map object and send another object to it
$map = new Map($factory);

// run drawMap method which create many object Icon
$map->drawMap();

print "Total Icon instances created: " . $factory->count();
